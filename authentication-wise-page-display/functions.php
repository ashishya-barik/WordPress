<?php

// Start session and handle authentication redirects
add_action('init', 'handle_authentication_redirect');

function handle_authentication_redirect() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    // Set session timeout to 1 hour
    $is_authenticated = isset($_SESSION['authenticated']) && 
                       $_SESSION['authenticated'] && 
                       (time() - $_SESSION['auth_time']) < 3600;
    
    // Get current page URL
    $current_url = home_url($_SERVER['REQUEST_URI']);
    
    // Get the path from URL for comparison
    $current_path = trim(parse_url($current_url, PHP_URL_PATH), '/');
    
    // Get homepage path
    $home_path = trim(parse_url(home_url('/'), PHP_URL_PATH), '/');
    
    // Get password page path
    $rev1_path = 'rev1'; // The slug of your password page
    
    // Always allow access to homepage and password page
    if ($current_path === $home_path || $current_path === $rev1_path) {
        return; // No redirect needed for these pages
    }
    
    // If not authenticated, redirect to password page
    if (!$is_authenticated) {
        // Store requested page for redirect after authentication
        $_SESSION['requested_page'] = $current_url;
        
        // Redirect to password page
        wp_redirect(home_url('/' . $rev1_path));
        exit;
    }
}