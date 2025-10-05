=== Custom WooCommerce Shop Page ===
Contributors: Ashishya Barik  
Tags: woocommerce, shop page, product loop, customization, wordpress theme  
Requires at least: 5.0  
Tested up to: 6.6  
Stable tag: 1.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

A lightweight and developer-friendly customization that modifies the WooCommerce shop page layout, enhancing how products are displayed within the product loop.

== Description ==

The **Custom WooCommerce Shop Page** feature allows you to easily modify and control the appearance of products on your WooCommerce shop page.  
This customization adjusts the default product loop layout and presentation, providing better flexibility and a more tailored shopping experience.

Developers can extend or adjust this code to meet specific layout or styling requirements.

== Features ==

- Customize the WooCommerce shop page product layout  
- Modify product display structure (e.g., title, price, image, buttons)  
- Easily extendable for advanced styling or functionality  
- Lightweight and optimized for performance  
- Compatible with any WooCommerce-compatible theme  

== Installation ==

1. Copy the file `custom-shop-page.php` into your theme’s `/inc/` directory.  
2. Open your theme’s `functions.php` file.  
3. Add the following line of code at the end of the file:

```php
require get_template_directory() . '/inc/custom-shop-page.php';
