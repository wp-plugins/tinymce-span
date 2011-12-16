=== TinyMCE Span ===
Contributors: diondeville and wpservicemasters
Donate link: http://wpservicemasters.com/plugins/tinymce-span/
Tags: tinymce, Visual Editor, span, text, text decoration, decorator, text border, text highlight, span button
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 1.2

Use span tags in posts to style in-line elements like &lt;span&gt;some text like this&lt;/span&gt; in the WordPress Visual Editor via. Adds an [SPA] button to the editor. Span CSS can be edited at Dashboard > Settings TineMCE Span.

== Description ==

Use span tags in posts to style in-line elements like &lt;span&gt;some text like this&lt;/span&gt; in the WordPress Visual Editor via. Adds an [SPA] button to the editor. Span CSS can be edited at Dashboard > Settings TineMCE Span.

This is useful for quickly highlighting text, adding preformatted borders around text and giving text a preformatted style. The plugin's backend admin panel makes it easy to edit the CSS class TinyMCE Span uses.

Plugin activation adds an [SPA] button to the Visual Editor. Clicking it opens a popup text box into which you can place the text you want add your preformatted styling to. No need to worry about subsequent text being accidentally written into the span tags as happens with WordPress citation and quote tags. TinyMCE Span adds a space character after the closing span tag to prevent it.

Effortlessly edit the CSS file used by TinyMCE Span. It comes with a backend editor for it.

This plugin is multisite safe. It has been tested for both network wide activation and deactivation as well as for site-by-site activation and deactivation. Each site gets its own prettyspan class CSS file.

TinyMCE editor has also been tested on development versions of WordPress (WP 3.3 is looking good!).

* [Plugin Homepage](http://wpservicemasters.com/plugins/tinymce-span/)
* [Support](http://wordpress.org/tags/tinymce-span)

== Installation ==

1 Either install the plugin using the WordPress plugin installer in the admin panel, or
1. Make sure you are running WordPress version 2.8 or higher.
1. Download the zip file and extract the contents.
1. Upload the 'advanced-random-post-thumbnails-widget' file to `/wp-content/plugins/`.
1, Extract the zip file.
1. Activate the plugin through the WordPress 'plugins' page.
1. See `Appearance > Widgets` to place the `Random Thumbnails Widget` within your theme.
1. Set the settings in `Appearance > Widgets`.

== Frequently Asked Questions ==

= Is this plugin multisite compatible? =

Yes. Each site creates its own unique prettyspan.css file.

= Does this plugin use the WordPress database? =

No. The files created are real and hosted on the site's server. This is more secure than using the database and makes the generated CSS quicker to load.

= Can I make a feature request? =

Yes you can. I don't monitor the WordPress forums often enough to catch requests posted there. Please visit me at [the plugin's homepage](http://wpservicemasters.com/plugins/tinymce-span/) to make your request. I will do what I can.

= Can I donate to you? =

Definitely! :D

WordPress and web development is my livelihood. I do accept donations but I prefer good ol' backlinks and word-of-mouth recommendations to potential clients. Visit me at [WP ServiceMasters](http://wpservicemasters.com/) to learn more about what I do.

== Screenshots ==

1. Visual Editor.
2. Admin Area.

== Supported Languages ==

* English

== Changelog ==

= 1.2 =

* Removed hard coding of wp-content directory. This will ensure the plugin works when the wp-content directory is renamed.
* Various changes to the backend. Version 1.3 will be visual.
* Added a CSS subdirectory to the plugin folder to house generated CSS files.
* Edited the readme file
* Updated the user license (GPL 3)

= 1.1 =

* Corrected a function name to prevent conflicts with other plugins.
* Corrected a typo in the Admin backend.

= 1.0 =

* First public release.

== Upgrade Notice ==

= 1.2 =

* Removed hard coding of the wp-content directory location to add compatibility with WP installations with the directory renamed. Made various other improvements.

= 1.1 =

* An overly general function name in version 1.0 could make the plugin clash with other plugins. Update to 1.1 to prevent clashes.

== Credits ==

This plugin is a heavily hacked version of TinyMCE Preformatted by Takayuki Miyauchi.

== License ==

GPL 3. Read license.txt.

This plugin is supplied as-is and comes with no guarantee. Use of this plugin is at the user's discretion.

== Contact ==

[Support](http://wpservicemasters.com/plugins/tinymce-span/)