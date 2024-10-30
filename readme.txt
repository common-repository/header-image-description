=== Plugin Name ===
Contributors: urkekg
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q6Q762MQ97XJ6
Tags: twenty ten, twenty eleven, header, image, description, alt, title, media, enhance
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: 0.1

Grab predefined header image description to be used for ALT, TITLE or other in template files.

== Description ==

Grab header image description from hardcoded description in functions.php or custom header additions and return it for usage in template files. Primary support Twenty Ten and Twenty Elevent themes, but others is also supported.

If header image does not have description (uploaded image), blog name and tagline is used.

== Installation ==

1. Upload `header-image-description` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add to template file `<?php header_image_desc(); ?>` in place where you wish to print out header image description.

== Frequently Asked Questions ==

= Why this extension? =

To provide valid XHTML code with dinamic header image description.

= Where to add this code? =

Open `header.php` template file, find line `<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />` (line 77 in Twenty Ten and 94 in Twenty Eleven), and replace `alt=""` with `alt="<?php header_image_desc(); ?>"`.

You can also add `title="<?php header_image_desc(); ?>"` before img closing tag `/>`, so on hover header image visitor get description in tooltip.

== Screenshots ==

1. A header image description set to TITLE displays in tooltip when hover header image.

== Changelog ==

= 0.1 =
* Initial release

== Upgrade Notice ==

= 0.1 =
Initial release.

