This code is designed for WordPress to control page access.

 - There is a special page called rev1, which uses the custom template “Password Protection Gateway”.

 - When a user visits the site, they can only access the home page and the rev1 page.

 - If they try to open any other page, they will be redirected to the rev1 page.

 - On the rev1 page, there is a password input field.

 - If the user enters the correct password, they will gain access to all pages on the site.

 - This access lasts for 1 hour. After 1 hour, they are automatically logged out and must re-enter the password.

 - In the code mentioned the static password is- Archidhomes@16

 - Add the functions.php code to your theme's functions.php file.

 - Create a new template file in your theme directory called rev1.php with the provided code.

 - Create a WordPress page with the slug "rev1" and assign the "Password Protection Gateway" template to it