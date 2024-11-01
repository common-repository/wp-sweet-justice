<?php
/*
Plugin Name: Wordpress Sweet Justice
Plugin URI: http://wordpress.org/extend/plugins/wp-sweet-justice/
Description: Use the awesome/feared 'Sweet Justice' text justification script. Templates can be modified to add class='sweet-justice' or the shortcode [sj] can be used.
Version: 1.1
Author: Chris Ravenscroft, Carlos Bueno (?)
Author URI: http://nexus.zteo.com
*/

/* BSD License */

// This function lifted from the deviantart plugin
if (!function_exists('plugin_dir_url')) {
	function plugin_dir_url($file) {
		if (!function_exists('plugins_url')) {
			return trailingslashit(get_option('siteurl') . '/wp-content/plugins/' . plugin_basename($file));
		}
		return trailingslashit(plugins_url(plugin_basename(dirname($file))));
	}
}

class SweetJustice {
	function __construct() {
		add_shortcode('sj', array($this, 'wp_sweet_justice'));
		add_action('wp_footer', array($this, 'add_scripts'));
	}

	function add_scripts() {
                global $wp_scripts;

                if (!in_array('jquery', $wp_scripts->done)) {
			echo "\n<script language='javascript' type='text/javascript' src='" . get_options('siteurl') . "/wp-include/js/jquery/jquery.js'><script>\n";
		}

		echo "\n<script language='javascript' type='text/javascript' src='" . plugin_dir_url(__FILE__) . "sweet-justice.min.js'></script>\n";
	}

	function wp_sweet_justice($atts, $content) {
		extract(
			shortcode_atts(
				array(
					'type' => 'full',
					),
				$atts)
			);
		switch($type) {
			case 'full':
				$sjclass = 'sweet-justice'; break;
			case 'hyphens':
				$sjclass = 'sweet-hyphens'; break;
			case 'disabled':
				$sjclass = 'justice-denied'; break;
			default:
				$sjclass = false;
		}
		if($sjclass === false) {
			return '<div style="color:red;font-weight:bold">Wrong style used in [sj] shortcode</div>';
		}
		return '<p class="' . $sjclass . '">' . $content . '</p>';
	}

}

new SweetJustice();
?>
