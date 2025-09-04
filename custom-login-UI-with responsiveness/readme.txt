=== Custom Login Page Styling ===
Contributors: Ashishya Barik
Tags: custom login, login page, branding, wordpress admin, custom logo, admin ui
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This is a custom WordPress **Login Page Styling** snippet that modifies the default WordPress login screen with your branding.  
It replaces the WordPress logo, adds a background image, and applies a modern, responsive design to the login form.

Features:
* Custom **login logo** (`sims-new-logo.png`)
* Branded **background image** (`sims-admin-bg.jpg`)
* Responsive layout for desktop and mobile
* Styled login form with box shadow and rounded corners
* Customized login button colors and effects
* Decorative corner accents with CSS

== Installation ==
1. Copy the code into your theme’s `functions.php` file.  

   OR place it in `inc/custom-login-page.php` and include it in `functions.php`:

   ```php
   require get_template_directory() . '/inc/custom-login-page.php';
