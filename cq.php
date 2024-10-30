<?php
/**
	Plugin Name: Correct Quotes
	Plugin URI: http://wp-r.ru/
	Description: Makes correct quotes on the site »word» for  "word" / Делает правильными кавычки »слово» на  "слово"
	Author: mojWP
	Version: 1.0
	Author URI: http://mojwp.ru/
	Text Domain: cq
	License: GPL
*/

remove_filter('the_title', 'wptexturize');
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
remove_filter('list_cats', 'wptexturize');
remove_filter('single_post_title', 'wptexturize');
remove_filter('comment_author', 'wptexturize');
remove_filter('term_name', 'wptexturize');
remove_filter('link_name', 'wptexturize');
remove_filter('link_description', 'wptexturize');
remove_filter('link_notes', 'wptexturize');
remove_filter('bloginfo', 'wptexturize');
remove_filter('wp_title', 'wptexturize');
remove_filter('widget_title', 'wptexturize');
?>