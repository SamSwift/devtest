=== Loose Leaf ===
Contributors: ryancowles
Tags: black, blue, green, white, two-columns, one-column, right-sidebar, responsive-layout, blavatar, custom-background, custom-header, custom-menu, editor-style, flexible-header, full-width-template, sticky-post, theme-options, threaded-comments, translation-ready
Requires at least: 4.0
Tested up to: 4.3-alpha
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Loose Leaf is a responsive portfolio theme for WordPress.

== Description ==
Loose Leaf is a WordPress portfolio theme. An optional custom header image provides the background for the large call-to-action section on the front page. Jetpack’s Custom Content Types are supported, allowing you to create a masonry portfolio grid, as well as a testimonial page.

== Frequently Asked Questions ==

= How do I create a portfolio? =

The Portfolio and Testimonial Custom Post Types require Jetpack to be installed and activated in order to work.

To create a portfolio page, first activate Jetpack, and then follow these steps:

1. Create a new page.
2. Under Page Attributes > Template, select Portfolio Page from the dropdown.
3. Enter the [portfolio] shortcode.
4. Publish your page.
5. Create Portfolio items from your Dashboard under Portfolio > Add New.

**Note:** The portfolio shortcode accepts the attributes found here:
https://en.support.wordpress.com/portfolios/portfolio-shortcode/#attributes

*Example:*
`[portfolio columns=3 display_types=false display_tags=false display_content=false]`

= How do I create a testimonial? =

To create a testimonial page, first activate Jetpack, and then follow these steps:

1. Create a new page.
2. Enter the [testimonials] shortcode.
3. Publish your page.

= How do I add homepage widgets? =

To create circular homepage widgets, first activate Jetpack, and then follow these steps:

1. Navigate to Appearance > Customize > Widgets.
2. Add an "Image (Jetpack)" widget to the Frontpage sidebar.
3. Enter the required settings.
4. Repeat steps 1-3 as needed for additional widgets.

= How do I use Infinite Scroll? =

Jetpack's Infinite Scroll module is also supported. You can follow these steps to enable it:

1. Navigate to the Jetpack Settings page in your Dashboard.
2. Find the "Infinite Scroll" module and activate it.
3. (optional) Click the "Configure" button to adjust Infinite Scroll settings.

== Changelog ==

= 1.0 - 2015-05-22 =
* Other: Reformat readme.txt
* Other: Fix looseleaf_fonts_url() in functions.php

= 0.1.2 - 2015-03-20 =
* Bug fix: Display posts properly on front page when showing recent posts.
* Bug fix: Show pagination on front page when showing recent posts.
* Bug fix: Remove duplicate widget areas on front page when showing recent posts.
* Other: __MACOSX directory removed.
* Other: Remove incorrect tag from style.css
* Other: Remove rtl.css  until it can be created properly.
* Other: Update Readme with theme usage notes.

= 0.1.1 - 2015-02-22 =
* Appearance: Remove white background from sidebar.
* Appearance: Style primary nav menu for mobile.
* Appearance: Minor layout adjustments.

= 0.1 - 2015-02-14 =
* Initial Release.
