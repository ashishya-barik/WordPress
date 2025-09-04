=== Coming Soon Countdown Template ===
Contributors: Ashishya Barik
Tags: coming soon, under construction, maintenance mode, countdown, bootstrap
Requires at least: 5.0
Tested up to: 6.6
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This is a custom **Coming Soon / Under Construction** page template for WordPress.  
It displays a responsive Bootstrap-based layout with a countdown timer starting from **15 days**.  

The countdown uses **server-side WordPress time** (`current_time('timestamp')`) so it does not reset on page reload.  

Features:
* Responsive Bootstrap design
* Countdown with **Days, Hours, Minutes, Seconds**
* Starts from **15 days** and stops at zero
* Easy to customize text, colors, and styles
* Works as a WordPress page template (`Coming Soon`)

== Installation ==
1. Copy the `coming-soon.php` file (your template code) into your theme directory:  
   `wp-content/themes/your-theme/coming-soon.php`

2. Login to your WordPress dashboard.

3. Create a new page (e.g., **Coming Soon**).

4. In the **Page Attributes** box, choose **Coming Soon** as the template.

5. Publish the page.

6. (Optional) Use a plugin like **Redirection** or your theme’s settings to redirect all visitors to this page while your site is under maintenance.

== Customization ==
- To change the **start date** or duration, edit this line in `coming-soon.php`:

```php
$start_time = strtotime("2025-09-05 00:00:00"); // change to your desired start date
$end_time = $start_time + (15 * 24 * 60 * 60);  // change 15 to another number of days
