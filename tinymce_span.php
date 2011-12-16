<?php
/*
Plugin Name: TinyMCE Span
Plugin URI: http://wpservicemasters.com/plugins/tinymce-span/
Description: TinyMCE Span lets you insert HTML span tags around text like &lt;span&gt;some text like this&lt;/span&gt; in the WordPress Visual Editor via an [SPA] button. This is useful for quickly highlighting text, adding preformatted borders around text and giving text a preformatted style. The plugin's backend admin panel makes it easy to edit the CSS class TinyMCE Span uses.
Author: WP Service Masters
Version: 1.2
Author URI: http://wpservicemasters.com/plugins/tinymce-span/
*/

define('TINYMCE_SPAN_PLUGIN_URL', WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)));

require_once(dirname(__FILE__).'/mceplugins.class.php');
new mceSpan();

class mceSpan{

function __construct()
{
    $path = '/mce_plugins/plugins/span';
    new mcePlugins(
        'span',
        TINYMCE_SPAN_PLUGIN_URL.'/mce_plugins/plugins/span/editor_plugin.js',
        dirname(__FILE__).'/mce_plugins/plugins/span/langs/langs.php',
        array(&$this, 'addSpanButton'),
        false
    );
}

public function addSpanButton($buttons){
    array_unshift($buttons, '|');
    array_unshift($buttons, 'span');
    return $buttons;
}

}

/* Add CSS for front end */

    global $blog_id;
    $prettyspan = $file = WP_PLUGIN_DIR."/tinymce-span/CSS/$blog_id.prettyspan.css";

if (file_exists($prettyspan)) {
} else {
    $file = WP_PLUGIN_DIR."/tinymce-span/CSS/prettyspan.css";
    $newcontents = file_get_contents($file);
    file_put_contents($prettyspan,$newcontents);
}

function prettyspan_css() {
global $blog_id;
$loc = "CSS/" . $blog_id . ".prettyspan.css";
$location = plugins_url( $loc, __FILE__ );
echo "\r\n" . '<link type="text/css" rel="stylesheet" href="' . $location . '" />' . "\r\n";
}

add_action('wp_head', 'prettyspan_css');

/* Add admin menu */

include 'bcknd.php';


?>
