=== Simple customize ===
Contributors: Clorith
Author URI: http://www.clorith.net
Plugin URI: http://www.clorith.net/wordpress-simple-customize/
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C8W62C6EZXJPY
Tags: theme, customization, customisation, css, design
Requires at least: 3.4
Tested up to: 4.1
Stable tag: 1.6.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It's your site, customize and show it!

== Description ==

Personalise your own website, no matter what theme and what customization options are added by the themes creator.

When active, the plugin will add a new section to your Customize screen entitled Simple Customize, containing input fields for various elements needed to display a new customize option.

You can easily find what you wish to customize by using the *Find element* button, which will let you point and click in the preview window to find what you are looking for.
Although no prior knowledge of CSS or HTML is required to use the plugin, basic understanding of CSS will definitely help you make the most out of this plugin, an in turn your own site.

Once you are happy with everything in the options, use the *Add element* button to have your customize option implemented.
The CSS will be queued up in such a manner that it will try to be the dominant rule, so assuming the theme doesn't have any [!important](http://stackoverflow.com/questions/3706819/what-are-the-implications-of-using-important-in-css) flags on its styling, your own styling will appear.

You are also able to implement 3rd party fonts using the plugins own options page, where you may add manual styling alternatives, as well as create categories for grouping your own styles.

All customizations are theme-specific, this means if you ever change your theme, you will get a clean slate to work off when customizing it.
Of course, should you ever revert back to your old theme, your previous custom styling will still be there.

**Translations**

Español (Spanish) - Andrew Kurtis @ [WebHostingHub](http://www.webhostinghub.com)


**Note:** You should always be cautious of modifying other peoples work, respect the time and dedication put forth by your themes author.

== Installation ==

1. Upload the `simple-customize` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You will find the Simple Customize option under then `Appearance` menu

== Frequently asked questions ==

= Do I need to know HTML/CSS/Programming to use this plugin? =

No existing knowledge is required, although some basic knowledge of CSS is recommended.

= Why can't I change styles from the Simple Customize options page? =

Styling your site is never an easy task, and to give you the best possible tools for the job, the WordPress live preview page is required, for this reason it was decided to disable any style changing from the options page to make sure the styling looks like you intend when you make the changes.

== Screenshots ==

1. The Simple Customize alternative added to the WordPress customize page
2. The view after clicking the find button
3. The fields have gotten a list of available options for you to choose from
4. Our new customize option under the colors category
5. We decided to change the color a little bit. Thanks to the color picker, this is made even easier!


== Changelog ==

= 1.6.2 =
* Updated the style clearing option to also clear the newly added format for customization storage
* Streamlined the uninstall procedure when removing the plugin
* Added some missing checks to prevent direct loading of files
* Fixed problem with exporting as CSS when picking a theme that isn't currently active

= 1.6.1 =
* Fix for imports using the new format some times failing due to auto-generated slashes

= 1.6 =
* Made the customizer attribute cases extendible
* Added hooks to various areas to make the plugin more flexible
* Fixed custom categories not showing up in the customizer screen
* Fixed editing mixing up attributes and selectors

= 1.5 =
* Improved how the customizer section is generated
* Improved handling of Google Fonts
* Changed customization storage from options table to a Custom Post Type
* Changed exports to use a JSON string
* Added default value option for font drop-downs (default theme value rarely matched any web font options)
* Added minify option for the generated CSS file
* Added CSS export option
* Added CSS caching to prevent excessive SQL queries with largely customized sites
* Fixed error appearing before the initial loading of fonts
* Replaced generic icons used with dashicons
* Replaced inline styles with proper CSS for plugin related features
* Opened up developer mode to have more options in the customizer screen

= 1.4 =
* Added edit modal for the customizer settings page
* Changed the way new customizations are added for servers with limits on URL elements
* Forced URLs into all forms as some browsers dislike self referencing forms
* Fixed in-header output not always being generated when opting to not use a stand alone CSS file
* General code cleanup to bring up the standards a bit more

= 1.3.2 =
* Fixed a warning when loading the fonts settings where some fonts didn't have proper URLs
* Fixed point and click customization tool
* Added nonce checks to customizer selections
* General code cleanup, separated it out from single file to make it easier to work with

= 1.3.1 =
* Add checks to prevent direct access to files
* Add checks for XSS attacks

= 1.3.0 =
* Tested with WordPress 3.9
* Cleaned up the customizer screen
* Cleaned up the options page
* Cleaned up the fonts page
* Cleaned up the settings page
* Font previews before adding them to your site
* Font enable/disable is deprecated with the new font previewer
* Removed help tab, it was bloated and didn't provide proper help
* 'Advanced mode' has been re-labeled as 'Developer mode'

= 1.2.5 =
* Fixed notice outputs for undefined variables when not in compatibility mode

= 1.2.4 =
* Optimized some bad code
* Added extra checks for compatibility mode not always triggering

= 1.2.3 =
* Compatibility mode for situations with strange rewrite rules (specially handy for nginx users)
* Made the Settings page a bit more readable
* Default to last CSS selector in the customizer screen

= 1.2.2 =
* Added loading of translated texts
* Added spanish translations

= 1.2.1 =
* Version bump, tested against WP 3.7, 3.7.1 and 3.8
* Reworked the priority list to increase probability styles being prioritized when including as a .css file

= 1.2.0 =
* Added translation support for drop down selectors when customizing
* Added more pre-built drop down choices
* Generated CSS now has labels in it to show you what customize option created a style if you view the source
* Added "advanced mode", disables pre-built options and lets you define everything your self
* Made the help page translatable

= 1.1.1 =
* Compatibility fix for WordPress 3.6

= 1.1.0 =
* Fixed custom categories not showing on options page
* Added support for font-family attributes
* Added settings page
* Decide if customizations go in their own CSS file, or i nthe <head> of your site to reduce server requests
* Added ability to enable/disable individual fonts
* Import and export added for whole theme sets

== Upgrade notice ==

Custom section fixes and improved flexibility for extensions