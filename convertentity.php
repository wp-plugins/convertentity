<?php
/*
Plugin Name: Convertentity
Plugin URI: http://wordpress.org/extend/plugins/convertentity/
Description: WordPress outputs sometimes some character entity references which are not allowed in XHTML. Convertentity replaces them with characters.
Version: 1.0.0
Author: plocha
Author URI: http://profiles.wordpress.org/plocha
License: GPLv2

Copyright 2012  Edgard Schmidt  (email : saiez@web.de)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class Convertentity {

function __construct () {
	ob_start ( array ( $this, 'filter_entities' ) );
}


function filter_entities ( $text ) {
	$forbidden_entities  = get_html_translation_table (HTML_ENTITIES,
		ENT_NOQUOTES | ENT_HTML5, get_bloginfo ( 'charset' ) );
	foreach ( str_split ( '<>&' ) as $allowed) {
		unset ($forbidden_entities [ $allowed ] );
	}

	return str_replace ( array_values ( $forbidden_entities ),
		array_keys ( $forbidden_entities ), $text);
}

};

new Convertentity;

?>
