Custom WordPress Login Page Styling

This code snippet customizes the default WordPress login page with a new logo, background image, and modern styling. It replaces the plain login screen with a branded, responsive, and visually appealing interface.

📂 File Placement

Place this code in your theme’s functions.php file.

Create an inc folder inside your theme if you want to keep the code modular, and save it as custom-login-page.php.
Then, include it in functions.php:

require get_template_directory() . '/inc/custom-login-page.php';

🎨 Features

Custom Logo: Replaces the WordPress logo with your own (sims-new-logo.png).

Custom Background: Adds a branded background image (sims-admin-bg.jpg) to the login page.

Responsive Design: Adjusts the login form for desktops, tablets, and mobile devices.

Modern UI Enhancements:

Rounded corners

Soft box shadow

Decorative corner accents using CSS pseudo-elements

Custom Button Styling: Login button with custom background color (#063151), without default outlines/shadows.

📸 Preview

Desktop View:
Login form styled at the left with a full-page background.

Mobile View:
Login form adjusts to full width with proper padding.

🛠️ Assets Used

Logo: /assets/img/sims-new-logo.png

Background: /assets/img/sims-admin-bg.jpg

Make sure these files exist in your theme’s assets/img/ directory.

📋 Usage

Add the code to your theme.

Upload your own logo and background image to match your branding.

Clear cache and reload the WordPress login page (/wp-login.php).

⚠️ Notes

If you change theme, you’ll need to move this code to the new theme.

To apply globally (independent of theme), create a small plugin instead of putting it in functions.php.

For security, you may also want to change the login logo URL from wordpress.org to your website:

function custom_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_url');