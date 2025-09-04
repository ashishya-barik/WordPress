<?php
/**
 * Template Name: Password Protection Gateway
 */

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Define the correct password
$correct_password = 'Archidhomes@16';

// Check if password is submitted
if (isset($_POST['password'])) {
    if ($_POST['password'] === $correct_password) {
        $_SESSION['authenticated'] = true;
        $_SESSION['auth_time'] = time();
        
        // Check if the requested page is an admin URL or not a frontend page
        $redirect_url = home_url('/home-1/'); // Default redirect
        
        if (isset($_SESSION['requested_page']) && !empty($_SESSION['requested_page'])) {
            $requested = $_SESSION['requested_page'];
            
            // Only redirect to frontend pages, not admin or AJAX URLs
            if (strpos($requested, '/wp-admin/') === false && 
                strpos($requested, 'admin-ajax.php') === false &&
                strpos($requested, 'wp-login.php') === false) {
                $redirect_url = $requested;
            }
        }
        
        wp_redirect($redirect_url);
        exit;
    } else {
        $error_message = 'Wrong password. Please try again.';
    }
}

// Check if already authenticated (valid for 1 hour)
$is_authenticated = isset($_SESSION['authenticated']) && 
                   $_SESSION['authenticated'] && 
                   (time() - $_SESSION['auth_time']) < 3600;

// If already authenticated, redirect to home-1
if ($is_authenticated) {
    wp_redirect(home_url('/home-1/'));
    exit;
}

// We're creating a complete HTML document, so we won't use get_header() or get_footer()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Required | <?php bloginfo('name'); ?></title>
        <style>
        /* Hide all theme elements for a clean login interface */
        #cookie-overlay, #cookie-popup, header#site-header, .page-header, 
        footer#site-footer, .sticky-icons, .site-navigation, .breadcrumbs {
            display: none !important;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .password-protection-container {
            max-width: 450px;
            width: 100%;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            position: relative;
            animation: fadeIn 0.8s ease;
        }
        
        .logo-container {
            margin-bottom: 30px;
        }
        
        .logo-container h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .logo-container p {
            color: #7f8c8d;
            font-size: 16px;
        }
        
        .password-form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .form-group input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        button.submit-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
        }
        
        button.submit-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .error-message {
            color: #e74c3c;
            margin-top: 15px;
            padding: 12px;
            background: #fadbd8;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
            display: <?php echo isset($error_message) ? 'block' : 'none'; ?>;
            animation: shake 0.5s;
        }
        
        .password-hint {
            font-size: 12px;
            color: #7f8c8d;
            margin-top: 5px;
            text-align: center;
        }
        
        .support-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #95a5a6;
        }
        
        .auth-status {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 20px;
            background: #f8f9fa;
        }
        
        .access-info {
            margin-top: 20px;
            padding: 15px;
            background: #e8f4fc;
            border-radius: 8px;
            font-size: 14px;
            text-align: left;
        }
        
        .access-info ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        
        .access-info li {
            margin-bottom: 5px;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        /* Responsive design */
        @media (max-width: 500px) {
            .password-protection-container {
                padding: 25px;
                margin: 10px;
            }
            
            .logo-container h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
<div class="password-protection-container">
    <div class="auth-status">
        <?php 
        if ($is_authenticated) {
            echo '✓ Authenticated';
        } else {
            echo '✗ Not authenticated';
        }
        ?>
    </div>
    
    <div class="logo-container">
        <h1>ArchidBuilders</h1>
        <p>Enter password to access exclusive content</p>
    </div>
    
    <div class="password-form">
        <form method="post" action="">
            <div class="form-group">
                <label for="password-input">Enter Password</label>
                <input type="password" id="password-input" name="password" required 
                       placeholder="Type your password here" autocomplete="current-password">
            </div>
            
            <button type="submit" class="submit-btn">Authenticate & Continue</button>
        </form>
        
        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
    </div>
    
    <div class="access-info">
        <strong>Access Information:</strong>
        <ul>
            <li>Authentication is valid for 1 hour</li>
        </ul>
    </div>
    
    <div class="support-info">
        If you've forgotten the password, please contact the site administrator.
    </div>
</div>

<script>
// Add some interactive effects
document.addEventListener('DOMContentLoaded', function() {
    const passwordInput = document.getElementById('password-input');
    const submitBtn = document.querySelector('.submit-btn');
    
    // Focus on password input when page loads
    if (passwordInput) {
        passwordInput.focus();
        
        // Add input event to clear error when typing
        passwordInput.addEventListener('input', function() {
            const errorMsg = document.querySelector('.error-message');
            if (errorMsg && errorMsg.style.display === 'block') {
                errorMsg.style.display = 'none';
            }
        });
    }
    
    // Add animation on submit
    if (submitBtn) {
        submitBtn.addEventListener('click', function() {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    }
    
    // Add Enter key support
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && passwordInput && document.activeElement === passwordInput) {
            submitBtn.click();
        }
    });
});
</script>
</body>
</html>