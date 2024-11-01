=== WP Sweet Justice ===
Contributors: Chris Ravenscroft
Tags: justification,typesetting
Requires at least: 2.6
Tested up to: 2.7.1
Stable tag: 1.1

Use the awesome/feared 'Sweet Justice' text justification script.

== Description ==

* Keep updated! http://nexus.zteo.com/tag/sweet-justice/
* This plugin can be used to justify text on your Wordpress blog.
* You can modify your templates to contain the css classes required,
* Or you can insert a shortcode in your posts/pages to activate it.
* Please note that the script is currently very picky and will only justify pure text.
* This plugin is released under the BSD license, like the original script found at http://github.com/aristus/sweet-justice
* Credits for the script itself should be attributed to carlos@bueno.org

== Installation ==

1. Expand this plugin's archive content to wp-content/plugins/
2. Go to Administration > Plugins and activate this plugin.
3. In your posts/pages, use this syntax:
   [sj [type=full|hyphens|disabled]]
   eg:
   [sj]
   [sj type=hyphens]
4. Or update your template to contain the classes recognized by Sweet Justice where you wish to justify text;
   eg:
   < ... class="sweet-justify">...
   Three classes are handled:
   * sweet-justice  -> justify and handle hyphens for text contained in this element
   * sweet-hyphens  -> only handle hyphens
   * justice-denied -> disable justifying and handling hyphens -- useful for a child element
