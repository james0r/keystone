<?php

function console_log($data) {
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

function bool2truthy($val) {
    return $val === '0' || $val == null || !isset($val) || $val === 0 ? false : true;
}

function get_meta($id, $key) {
    $value = get_post_meta($id);
    return $value[$key][0];
}

function keystone_get_the_meta($key, $single = true) {
    $value = get_post_meta(get_the_ID(), $key, $single);
    return $value;
}

// --- helpers ---

function keystone_do_truncate($text, $limit) {
    $return = $text;
    if (strlen($text) > $limit) {
        $return = substr($text, 0, $limit);
        $return .= '..';
    }
    return $return;
}

function get_directions($address) {
    return sprintf('https://www.google.com/maps/dir/?api=1&destination=%s', $address);
}

function slugify($text) {
    return str_replace(' ', '-', strtolower($text));
}

function get_nav($menu_name, $args = []) {
    $return = [];
    $wp_nav = wp_get_nav_menu_items($menu_name, $args);
    if (is_array($wp_nav) === true) {
        $tree_like = buildTree($wp_nav);
        $return = parse_nav($tree_like);
    }
    return $return;
}

function keystone_hex2rgb($colour) {
    if ($colour[0] == '#') {
        $colour = substr($colour, 1);
    }
    if (strlen($colour) == 6) {
        list($r, $g, $b) = [$colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]];
    } elseif (strlen($colour) == 3) {
        list($r, $g, $b) = [$colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]];
    } else {
        return false;
    }
    $r = hexdec($r);
    $g = hexdec($g);
    $b = hexdec($b);
    return ['red' => $r, 'green' => $g, 'blue' => $b];
}

function keystone_getColorLightness($hex = 'No Color Provided') {
    global $post;
    $id = $post->ID;

    //if meta id is present, get that, if not get primary color
    if (empty($hex)) {
        $color = '#ffffff';
    } elseif ($hex != 'No Color Provided') {
        $color = $hex;
    } else {
        $color = site_ops_brand_color(false);
    }

    $color_nohash = str_replace('#', '', $color);

    //get background lightness
    $hsl = Keystone_Colors::hexToHsl($color_nohash);
    $lightness = $hsl[2] * 1000;
    return $lightness;
}

// CSS Minifier => http://ideone.com/Q5USEF + improvement(s)
function minify_css($input) {
    if (trim($input) === '') {
        return $input;
    }
    return preg_replace(
        [
            // Remove comment(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
            // Remove unused white-space(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
            // Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
            '#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
            // Replace `:0 0 0 0` with `:0`
            '#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
            // Replace `background-position:0` with `background-position:0 0`
            '#(background-position):0(?=[;\}])#si',
            // Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
            '#(?<=[\s:,\-])0+\.(\d+)#s',
            // Minify string value
            '#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
            '#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
            // Minify HEX color code
            '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
            // Replace `(border|outline):none` with `(border|outline):0`
            '#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
            // Remove empty selector(s)
            '#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s'
        ],
        [
            '$1',
            '$1$2$3$4$5$6$7',
            '$1',
            ':0',
            '$1:0 0',
            '.$1',
            '$1$3',
            '$1$2$4$5',
            '$1$2$3',
            '$1:0',
            '$1$2'
        ],
        $input
    );
}
