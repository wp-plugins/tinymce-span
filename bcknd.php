<?php

add_action('admin_menu', 'tinymce_span_menu');

function tinymce_span_menu() {
	add_options_page('TinyMCE Span', 'TinyMCE Span', 'manage_options', 'tiny-mce-span', 'tinymce_span_options');
}

function tinymce_span_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	echo '<div class="wrap">';


global $blog_id;
$file = WP_PLUGIN_DIR."/tinymce-span/$blog_id.prettyspan.css";

if($_POST){

 $newcontents=$_POST[newcontents];
 file_put_contents($file,$newcontents);


}

if($_POST)
{
  echo '<p><span style="font-weight: 700; background-color: #CCFFCC">You have successfully updated your CSS file!</span></p>';
}

?>

<iframe src="http://headers.wpservicemasters.com/tinymce-span.php" frameborder="0" width="100%" height="100" scrolling="no" style="border: 0;margin-left: auto;margin-right:auto;"></iframe>

<h3>Style Your TinyMCE Span Tag</h3>
<p>TinyMCE Span adds a new button to the WordPress visual editor that lets you place text in HTML span tags. The span tag uses the class <strong>prettyspan</strong> which you can style using the text box on this page. This version of TinyMCE span lets you create only one stylized span tag. A future version will let you create multiple span classes for creating multiple text effects.</p>
<p>TinyMCE Span is multi site safe. Each blog (or site) creates its own prettyspan class CSS file when both the plugin is activated and the blog's backend is accessed.</p>
<p>Please be aware that this form will place anything you into it into your prettyspan.css file. Please write proper CSS only i.e no notes and no HTML or PHP. Anything that is not CSS might show in your frontend. The stylesheet is non executable so exploits shouldn't be possible.</p>
<p>This blog's WordPress ID is blog number <strong><?php echo ''.$blog_id.''; ?></strong>. Your CSS file will be prefixed with the number <strong><?php echo ''.$blog_id.''; ?></strong> and your CSS file will be called <strong><?php echo ''.$blog_id.''; ?>.prettyspan.css</strong>. It will be stored in the directory <strong><?php echo '' . get_bloginfo('wpurl') . '/wp-content/plugins/tinymce-span/'; ?></strong></p>

<br />

<form method="post">
<?php
if($submit != "Save")
{
  $filecontents = file_get_contents($file);
  echo '<textarea name="newcontents" cols="70" rows="15" style="border: solid 1px black; -moz-border-radius: 10px;border-radius: 10px;">'.$filecontents.'</textarea>';
  $submit = "";
}

if($submit == "Save")
{
  $filecontents = file_get_contents($file);
  echo '<textarea name="newcontents" cols="70" rows="20" style="border: solid 1px black; -moz-border-radius: 10px;border-radius: 10px;">'.$filecontents.'</textarea>';
  $submit = "";
}
?>
<br /><br />
<input type="submit" value="Save">
<br />
</form>

<p>The box above shows your current prettyspan style. Edit your prettyspan.css file directly using the box above.</p>
<p>Use the <img style="display: inline;" src="/wp-content/plugins/tinymce-span/mce_plugins/plugins/span/img/icon.png" /> button in your TinyMCE editor to apply your styling to text.</p>

<h3>Example Styles</h3>
<p>Any valid CSS rules may be applied here. Here are a few examples to get you started</p>
<p>To add a blue border to the top and bottom of text:</p>
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
span.prettyspan
{
border-top: solid 1px blue;
border-bottom: solid 1px blue;
}
</pre>
<p>For example, <span style="border-top: solid 1px blue; border-bottom: solid 1px blue;">Like me!</span></p>
<p>The color can be red, orange, yellow, green, blue, black, white, gray or any valid hexadecimal code such as #000000 (black) or #ffffff (white).</p>
<p>To surround the text in a dotted orange border:</p>
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
span.prettyspan
{
border: dotted 1px orange;
}
</pre>
<p>For example, <span style="border: dotted 1px orange;">Like me!</span></p>
<p>To give text a different color and a dotted top and bottom red border:</p>
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
span.prettyspan
{
border-top: dotted 1px red;
border-bottom: dotted 1px red;
padding: auto 4px auto 4px;
}
p span.prettyspan
{
color: red;
text-weight: bold;
}
</pre>
<p>For example, <span style="border-bottom: dotted 1px red;border-top: dotted 1px red;padding: auto 4px auto 4px;color: red;text-weight: bold;">Like me!</span></p>
<p>If you wanted to style link anchor text within a span box then you would use CSS similar to this:</p>
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
a:link span.prettyspan
{
color: red;
text-weight: bold;
}
</pre>
<p>To give text a dotted red top and bottom border and a solid thick red left and right border with 7px internal left and right padding:</p>
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
span.prettyspan
{
border-top: dotted 1px red;
border-bottom: dotted 1px red;
border-left: solid 5px red;
border-right: solid 5px red;
padding-left: 7px;
padding-right: 7px;
}
</pre>
<p>For example, <span style="border-top: dotted 1px red;border-bottom: dotted 1px red;border-left: solid 5px red;border-right: solid 5px red;padding-left: 7px;padding-right: 7px;">Like me!</span></p>
<p>The prettyspan CSS created when you first activated the plugin uses some CSS3 effects on the text. This is done to show the potential for using a span box around your text.
<pre style="padding-left:20px;border-left: solid 2px #5ebfff;">
span.prettyspan
{
border-top: solid 1px red;
border-bottom: solid 1px red;
border-left: solid 2px red;
border-right: solid 2px red;
background-color: black;
padding-left: 10px;
padding-right: 10px;
}
p span.prettyspan
{
color: gold;
text-shadow: 3px 3px 3px white;
font-weight: bold;
}</pre>
<p>For example,</p>
<p><span style="border-top: solid 1px red;border-bottom: solid 1px red;border-left: solid 2px red;border-right: solid 2px red;background-color: black;padding-left: 10px;padding-right: 10px; color: gold;text-shadow: 3px 3px 3px white;font-weight: bold;font-size:20px;margin: 20px;">How cool am I!</span></p>
<p>If you wanted, you could even use a graphic for the background of the span for your text. You can work that one out for yourself</p>
<h3>Web Safe Colors</h3>
<p>Along with hexadecimal colors, you can use a color's name explicitly in the CSS to give an element its quality. Here is a list of web safe color names:</p>
<ul style="padding-left:20px;border-left: solid 2px #5ebfff;">
<li><span style="color:Aqua">Aqua</span></li>
<li><span style="color:Black">Black</span></li>
<li><span style="color:Blue">Blue</span></li>
<li><span style="color:Fuchsia">Fuchsia</span></li>
<li><span style="color:Gray">Gray</span></li>
<li><span style="color:Grey">Grey</span></li>
<li><span style="color:Green">Green</span></li>
<li><span style="color:Lime">Lime</span></li>
<li><span style="color:Maroon">Maroon</span></li>
<li><span style="color:Navy">Navy</span></li>
<li><span style="color:Olive">Olive</span></li>
<li><span style="color:Purple">Purple</span></li>
<li><span style="color:Red">Red</span></li>
<li><span style="color:Silver">Silver</span></li>
<li><span style="color:Teal">Teal</span></li>
<li><span style="color:White;background-color:black;">White</span></li>
<li><span style="color:Yellow;background-color:black;">Yellow</span></li>
</ul>
<p>A good CSS reference page is available <a href="http://www.elizabethcastro.com/html/extras/cssref.html" target="_blank">here</a>.</p>
<p>Have fun. If you have questions then please visit us at either <a href="http://wpservicemasters.com">WP Service Masters</a> or <a href="http://journalxtra.com">JournalXtra.com</a>.</p>
<?php
 echo '</div>';
}
