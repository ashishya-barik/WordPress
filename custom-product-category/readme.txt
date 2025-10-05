=== Custom WooCommerce Category Page ===
Contributors: Ashishya Barik  
Tags: woocommerce, product category, product loop, customization, wordpress theme  
Requires at least: 5.0  
Tested up to: 6.6  
Stable tag: 1.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

A clean and developer-friendly customization to modify WooCommerce category pages and enhance the product loop layout for a more optimized and visually appealing display.

== Description ==

The **Custom WooCommerce Category Page** functionality allows you to modify the product display and layout on WooCommerce category (taxonomy) pages.  
This customization provides full control over the product loop structure — helping you adjust how products appear, rearrange elements, and implement a consistent layout across your shop.

It is designed for developers or advanced users who want to tailor the category page experience while maintaining compatibility with WooCommerce standards.

== Features ==

- Customizes the WooCommerce category page product loop  
- Adjusts product grid structure, order, and layout  
- Supports adding or removing WooCommerce hooks  
- Lightweight, optimized, and easy to extend  
- Compatible with all WooCommerce-ready themes  

== Installation ==

1. Copy the file `custom-product-category.php` into your theme’s `/inc/` directory.  
2. Open your theme’s `functions.php` file.  
3. Add the following line of code:

```php
require get_template_directory() . '/inc/custom-product-category.php';
