<?php
/*
    Header Image Description grab predefined descriptions for usage
    in template files.
    Copyright (C) 2011 Aleksandar Urošević <urke@users.sourceforge.net>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

Plugin Name: Header Image Description
Plugin URI: http://blog.urosevic.net/wordpress/header-image-description/
Description: Grab predefined header image description to be used for ALT, TITLE or other in template files.
Version: 0.1
Author: Aleksandar Urošević
Author URI: http://urosevic.net
License: GNU GPLv3
*/
function get_header_image_desc() {
	global $_wp_default_headers;
	$header_description = get_bloginfo('name') . ": " . get_bloginfo('description');
	$header_image = str_replace( get_template_directory_uri(), "", get_theme_mod('header_image') );
	foreach ( $_wp_default_headers as $header_key => $header ) {
		if ( str_replace("%s", "", $header['url']) == $header_image ) {
			$header_description = $header['description'];
		}
	}
	return $header_description;
}

function header_image_desc() {
	echo get_header_image_desc();
}
?>
