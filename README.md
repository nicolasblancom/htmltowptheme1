# HtmlToWpTheme

This is a WordPress theme made from an HTML template, for training purposes.

## Instructions

**NOTE:** This repo contains only the `/wp-content/themes/htmltowp/`, being 'htmltowp' the main directory of the WordPress Theme.

**How to install and use the theme?**

Just download the repo, and upload that directory inside your WordPress installation folder (inside wp-content/themes/). You have the theme files, but the WordPress installation itself (the database) is not configured as in the demo...

From here, you have a functional theme but with no content or minimal configurations:
- it should have a "Custom Post Type" named "Portfolio". That's why you can see 'content-portfolio.php', 'page-portfolio.php' and 'single-portfolio.php' files. These files handle this Custom Post Type
- in the demo, it has 6 portfolio post created in order to list them and show them on the corresponding page

So, in order to test all the theme as it's seen in the demo you should create that custom post type. How? The easy way:
1. install [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) and [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/). The first one creates the fields the custom post type will have, and the second one has the options to actually create the custom post type.
1. create 'portfolio' custom post type in the Custom Post Type UI options page
1. add two fields with the lables 'description' and 'images'. The first one is a 'text-area' field and the second one is a 'WHSIWYG editor' type. Now Custom Post Types are created and ready to use.

Now let's configure the pages and posts:
1. now create 4 pages: 'Blog', 'Home static', 'Example page', 'Portfolio'
1. go to Appearence > Customise and set 'Front Page Displays' to 'A static page' and choose 'Home static' page as Front Page and 'Blog' page as Posts page.
1. now edit each one of the created pages and:
    2. add some text to the content area (the content added to Home static, won't show but you can add it anyway)
    2. on Example page, set Temaplate (under 'Page Attributes' section on the edit page screen) to 'Left Sidebar'
    2. on Portfolio page, set Temaplate (under 'Page Attributes' section on the edit page screen) to 'Portfolio Page'
1. lastly, create 6 or more Portfolio items and add some text on the description field, and some images on the WYSIWYG editor for the images field

[HtmlToWp Page](http://nicolasblancom.com/htmltowp-pasando-una-plantilla-html-wordpress)
