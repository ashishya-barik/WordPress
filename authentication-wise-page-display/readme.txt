=== Password Protection Gateway ===
Contributors: Ashishya Barik
Tags: password protection, restricted access, authentication, session, custom template
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This is a custom **Password Protection Gateway** for WordPress.  
It restricts access to your site and allows visitors to enter a password before viewing any content.  

The system uses **sessions** and provides access for **1 hour** after successful authentication.  
If the session expires, users will be redirected back to the password page to re-enter the password.  

Features:
* Secure password gateway page
* Authentication valid for **1 hour**
* Session-based protection (no cookies required)
* Blocks access to all frontend pages until password is entered
* Allows access to admin, login, and AJAX endpoints without interruption
* Easy setup with custom page template (`Password Protection Gateway`)

== Installation ==
1. Copy the `rev1.php` template file into your theme directory:  
   `wp-content/themes/your-theme/rev1.php`

2. Add the provided authentication code snippet into your theme’s `functions.php`.

3. Login to your WordPress dashboard.

4. Create a new page with the slug **rev1**.

5. Assign the template **Password Protection Gateway** to this page.

6. Publish the page.

7. Now, when visitors open your site, they will be redirected to the **rev1** page until they enter the correct password.

== Usage ==
- Default password is:  
