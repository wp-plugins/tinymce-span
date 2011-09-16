<?php
/*
Plugin Name: TinyMCE Span
Plugin URI: http://wpservicemasters.com/plugins/tinymce-span/
Description: TinyMCE Span lets you insert HTML span tags around text like &lt;span&gt;some text like this&lt;/span&gt; in the WordPress Visual Editor via an [SPA] button. This is useful for quickly highlighting text, adding preformatted borders around text and giving text a preformatted style. The plugin's backend admin panel makes it easy to edit the CSS class TinyMCE Span uses.
Author: WP Service Masters
Version: 1.1
Author URI: http://wpservicemasters.com/plugins/tinymce-span/
*/

/*
Copyright (c) 2011 Dion de Ville, WP Service Masters

Copyright notice written by Takayuki Miyauchi

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
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
    $prettyspan = $file = WP_PLUGIN_DIR."/tinymce-span/$blog_id.prettyspan.css";

if (file_exists($prettyspan)) {
} else {
    $file = WP_PLUGIN_DIR."/tinymce-span/prettyspan.css";
    $newcontents = file_get_contents($file);
    file_put_contents($prettyspan,$newcontents);
}

function prettyspan_css() {
global $blog_id;
echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') .'/wp-content/plugins/tinymce-span/'. $blog_id .'.prettyspan.css" />' . "\n";
}

add_action('wp_head', 'prettyspan_css');

/* Add admin menu */

include 'bcknd.php';


?>
