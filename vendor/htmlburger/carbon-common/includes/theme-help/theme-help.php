<?php
if ( function_exists( 'add_action' ) ) {
	add_action( 'admin_menu', 'crb_add_theme_readme', 11 );
}

function crb_add_theme_readme() {
	$unix_style_template_directory = str_replace( '\\', '/', get_template_directory() ); // because WP core hardcodes '/' instead of using DIRECTORY_SEPARATOR
	$unix_style_file_directory = str_replace( '\\', '/', dirname( __FILE__ ) );
	
	$url = str_replace( '\\', '/', str_replace( untrailingslashit( $unix_style_template_directory ), get_template_directory_uri(), $unix_style_file_directory ) );
	wp_register_style( 'theme-help-style', $url . '/theme-help.css', array(), '0.1', 'screen' );
	wp_enqueue_style( 'theme-help-style' );
	add_menu_page( __( 'Theme Help', 'app' ), __( 'Theme Help', 'app' ), 'administrator', 'theme-readme', 'crb_include_theme_help', 'dashicons-editor-help' );
}

function crb_include_theme_help() {
	$parsedown = new Parsedown();
	$readme_paths = array(
		get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'README.md',
		get_template_directory() . DIRECTORY_SEPARATOR . 'README.md',
		dirname( get_stylesheet_directory() ) . DIRECTORY_SEPARATOR . 'README.md',
		dirname( get_template_directory() ) . DIRECTORY_SEPARATOR . 'README.md',
	);

	$readme_paths = apply_filters( 'crb_help_readme_paths', $readme_paths );

	$readme = '';
	foreach ( $readme_paths as $path ) {
		if ( file_exists( $path ) ) {
			$readme = file_get_contents( $path );
			break;
		}
	}
	if ( $readme === '' ) {
		$readme = '## Unable to open README.md';
	}
	?>
	<div id="theme-help-markdown" class="wrap" style="display: none;">
		<div class="summary">
			<h2><?php _e( 'Summary', 'app' ); ?></h2>
		</div>
		<?php echo $parsedown->text( $readme ); ?>
	</div>
	<script type="text/javascript" language="javascript">
	(function($, $window, $document){

	function depth( item ) {
		if (typeof( item ) == 'undefined') {
			return 0;
		}
		switch ( item.tagName ) {
			case 'H2':
			case 'H3':
			case 'H4':
				return item.tagName.substr( 1, 1 );
				break;
			default:
				return 0;
		}
	}

	$document.ready(function(){
		var $container = $( '#theme-help-markdown' );
		var $summary = $container.find( '.summary:first' );

		var topDepth = 3; // the depth of the outmost
		var summary = '<ol>';
		var $headings = $container.find( 'h2, h3, h4' ).not( '.summary *' );

		$headings.each( function() {
			var $parent = $(this).parent();
			if ( $parent.is( 'li' ) ) {
				$parent.addClass( 'list-heading list-heading-' + depth( this ).toString() );
			}
		});

		for (var i = 0; i < $headings.length; ++i) {
			var item = $headings[i];

			if ( typeof item != 'object' ) {
				continue;
			}

			var previous = $headings[i - 1];
			var next = $headings[i + 1];

			if ( typeof previous != 'undefined') {
				if ( depth( previous ) > depth( item ) ) {
					for (var j = 0; j < depth( previous ) - depth( item ); ++j) {
						summary += '</li></ol></li>';
					}
				} else if ( depth( previous ) == depth( item ) ) {
					summary += '</li>';
				}
			}

			var label = $(item).text();
			var id = 'section-' + label.toLowerCase().replace(/[^a-z0-9]/g, '-').replace(/-{2,}/g, '-');
			var $anchor = $('<a></a>').addClass( 'theme-readme-anchor' ).attr( 'id', id ).prependTo( $(item) );

			summary += '<li><a href="#' + id + '">' + label + '</a>';

			if (typeof next != 'undefined') {
				if ( depth( next ) - depth( item ) == 1) {
					summary += '<ol>';
				}
			} else {
				summary += '</li>';
			}
		}

		for (var i = 0; i < depth( $headings[$headings.length-1] ) - topDepth; ++i) {
			summary += '</ol></li>';
		}

		summary += '</ol>';
		$summary.append( summary );
		$container.show();
	});

	})(jQuery, jQuery(window), jQuery(document));
	</script>
	<?php
}
