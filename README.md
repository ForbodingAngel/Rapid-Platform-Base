# What is "Rapid Platform Base"

It started out as a relatively simple and small project to make it super easy and fast to prototype new websites with dynamic layouts and the ability to change the entire look on the fly, as well as give the end user complete control over their website. This is so that someone with 0 coding ability can change the entire site around to their liking via simply using the admin panel

# What it does

Rapid Platform Base originally started as a base theme and wordpress install for The Rapid Platform (http://www.therapidplatform.com) and while Rapid Platform is certainly still an important part, it's role gets progressively smaller as development continues.

Using the plugins provided and the customization options therein, this framework will allow you to erect custom sites in minutes. I even use it on my own company site (http://www.it-magique.com), and it is in use for quite a few other sites on the web as well.

The layout is broken into several sections. The header area has 3 widget areas, Menu above, Header, and Menu below. In case it isn't obvious, the menu areas are there in case you want a horizontal menu. The theme supports sticky navigation menus (menus that stick to the top of the screen when you scroll past them) as well as simple static header menus. Sidebar menus are also supported, although the use of sidebars does require some minor theme editing (going into the relevant files and uncommenting the sidebar calling code).

The main area is of course the content area, this is handled by post and page content.

The footer area is in two sections, Footer and Site Info. Site info is at the very bottom and is where typically you would place your copyright text.

The Rapid Platform supports columns via shortcodes and using the visual editor widget in these areas, you have complete control over them.

# Customizer

In the appearance > customizer section you have customization options for nearly every portion of the site. You can change padding, add box shadows, change colors, etc. It is extremely powerful, and new options can be added by simply navigating to appearance > simple customize and creating new categories and manual selectors.

# Menu

The menu is handled by the plugin "max mega menu". Unfortunately the devs of said plugin keep changing ID and Class names, which causes a lot of issues to my override styles. As a result I have simply bumped it's version number to one so high that it will never be auto-updated. Max mega menu allows for a lot of extremely cool things, and makes my least favorite part of creating a new site, very fun and pleasant.

# Header

Because the header is in a widget, this makes it super easy to do your own header layouts. You can add a visual editor widget and pretty much go to town on setting up how you want it to look. If you prefer a more code centric header design you can simply switch over to the html tab on the visual editor and set it up that way as well. You are in no way limited.

# Content and layout

Content and layout is particular is handled either by Easy Columns (accessible via the visual editor) or via the rapid platform's shortcodes. Both have their respective pros/cons.

# Footer

Same thing as the header. Due to the fact that the footer area is in a widget area, you can do all kinds of cool things with it. Get creative!

# Is it responsive?

Yes, Everything is responsive. The breakpoints for pretty much everything are set at 800px. Additionally, if you use sidebars, there is a post/page template for sidebars that will shove right hand sidebars to the top of the page so that your navigation menu will be at the top properly instead of being shoved below the page content. Additionally, the menu has specific styling for when it is in a sidebar to behave differently than when it is in a horizontal area (like the header).

I highly advise playing around with it a bit and seeing how it all works.

# Summing it up and getting started

This framework is ever evolving and will be continually updated. It is primarily for myself so that I can prototype builds extremely quickly, and create professional sites with a minimum of effort, while still retaining the ability to do an entirely custom build if needed while allowing the end user to have unprecedented control over the final product.

## Getting Started

Clone the repo (or download the zip), and create a new database. Import the database included. The default username/pass for the admin panel is rapid/testing. Make sure to create a new username and delete this default user as soon as possible.

# What if I want to add some custom css?

Not a problem, the theme looks for a file called site-specific-styles.css, if it exists, it will be imported. Put any custom css in that file (you might need to create it), and place that file in the root of the theme folder.