<?php
/**
 * Utility to load php fragments for reuse throughout a WordPress theme
 * Example usage:
 * - Carbon_Fragment::create('layout-block-left', array('name'=>'John Doe'))->render();
 * - Carbon_Fragment::create(array('layout-block-left', 'layout-block'))->cache(60*60*24)->render();
 */
class Carbon_Fragment {
	/**
	 * Path to the template file located by the supplied fragments
	 */
	protected $template_file = '';

	/**
	 * Array of key-value pairs to pass to the fragment
	 */
	protected $context = array();

	/**
	 * Whether to cache the generated fragment html or not
	 */
	protected $cache = false;

	/**
	 * Cache lifetime in seconds
	 */
	protected $cache_lifetime = 0;

	/**
	 * Cache identifier to allow multiple caches for the same template file
	 */
	protected $cache_identifier = '';

	/**
	 * Static constructor shortcut
	 */
	static function create($fragments, $context=array()) {
		return new self($fragments, $context);
	}

	/**
	 * Construct the fragment object. 
	 */
	function __construct($fragments, $context=array()) {
		if (!is_array($fragments)) {
			$fragments = array($fragments);
		}

		$fragments = preg_replace('/^\/?(fragments\/)?(.*?)(\.php)?$/i', 'fragments/$2.php', $fragments);
		$this->template_file = locate_template($fragments, false, false);
		
		if (!$this->template_file) {
			throw new Carbon_Fragment_Exception('Crabon Fragment could not locate template for: [' . implode(', ', $fragments) . ']', 1);
		}

		if (is_array($context)) {
			$this->context = $context;
		} else {
			throw new Carbon_Fragment_Exception('Crabon Fragment context should be an array of key-value pairs to pass to the fragment. Received ' . gettype($context) . ' instead', 2);
		}
	}

	/**
	 * Load the template html by requiring the template file
	 */
	protected function load() {
		extract($this->context);

		ob_start();
		require($this->template_file);
		$html = ob_get_clean();

		return $html;
	}

	/**
	 * Load the template html from cache
	 * Falls back to load() if the cache is invalid/expired
	 */
	protected function load_from_cache() {
		$cache_key = $this->get_cache_key($this->template_file, $this->context, $this->cache_identifier);
		$html = get_transient($cache_key);
		if ($html === false) {
			$html = $this->load();
			set_transient($cache_key, $html, $this->cache_lifetime);
		}
		return $html;
	}

	/**
	 * Convert an object of any type (array, object, string etc.) to a sha1-based 9 character identifier
	 */
	protected function get_string_identifier($object) {
		$identifier = sha1(json_encode($object));
		$identifier = substr($identifier, 0, 9);
		return $identifier;
	}

	/**
	 * Returns a unique cache key string for the current template file and context and the supplied identifier (if any)
	 */
	public function get_cache_key($template_file, $context, $identifier='') {
		$pieces = array(
			'crb_fragment',
			$this->get_string_identifier($template_file),
			$this->get_string_identifier($context),
			$this->get_string_identifier($identifier),
		);
		$cache_key = implode(':', $pieces);
		return $cache_key;
	}

	/**
	 * Sets whether the fragment should be cached, for how long and an optional cache identifier
	 * For example, get_current_user_id() can be used as the identifier for a per-user based cache
	 */
	public function cache($lifetime, $identifier='') {
		$this->cache_lifetime = $lifetime;
		$this->cache_identifier = $identifier;
		$this->cache = true;
		return $this;
	}

	/**
	 * Purges cached data for this fragment.
	 */
	public function purge_cache($identifier='') {
		$cache_identifier = $identifier ? $identifier : $this->cache_identifier;
		$cache_key = $this->get_cache_key($this->template_file, $this->context, $cache_identifier);
		delete_transient($cache_key);
		return $this;
	}

	/**
	 * Returns the fragment html
	 */
	public function get() {
		$html = '';
		if ($this->cache) {
			$html = $this->load_from_cache();
		} else {
			$html = $this->load();
		}
		return $html;
	}

	/**
	 * Echoes the fragment html
	 */
	public function render() {
		echo $this->get();
	}
}

class Carbon_Fragment_Exception extends Exception {}
