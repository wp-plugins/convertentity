=== Convertentity ===
Contributors: plocha
Tags: html, xhtml, character, entity, reference, convert, valid, invalid, syntax
Requires at least: 3.3.2
Tested up to: 3.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Converts all character entity references, which are forbidden in XHTML, into their corresponding characters.

== Description ==

Some WordPress functions outputs character entity references. The most of these are not allowed in XHTML. So if your WordPress installation uses the mime type 'application/xhtml+xml', the generated sites could have invalid xhtml code and the browser would display the syntax error page.

Convertentity converts all entity references into their corresponding characters with the exception of the references for the following characters: '<>&"

These references are the only ones which are allowed in XHTML.

== Installation ==

1. Upload `convertentity.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* Conversion of character entity references

== Upgrade Notice ==

= 1.0 =
This is the first version..
