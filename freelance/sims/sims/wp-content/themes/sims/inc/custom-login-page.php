<?php

function custom_login_logo() {
    echo '<style type="text/css">
    h1 a { background-image: url('.get_bloginfo('template_directory').'/assets/img/sims-new-logo.png) !important; background-size: 200px !important; background-position: center !important; height: 200px !important; width:100% !important; }
    body {
        display: flex;
        background-image: url('.get_bloginfo('template_directory').'/assets/img/sims-admin-bg.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }
    #login {
    position: relative;
    overflow: hidden;
    background-color: #f6f6f6;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 13px 0px rgb(0 0 0 / 16%);
    margin-left: 6%;
    width: 28%;
}

.login form {
    background-color: #f6f6f6;
    padding: unset;
    border: unset;
    box-shadow: unset;
}
input#wp-submit {
    background-color: #063151;
    border: none;
    padding: 0px 40px;
}
input#wp-submit:focus {
    box-shadow: unset;
    outline: none;
}
#login:before {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 0;
    height: 0;
    border-bottom: 42px solid;
    border-left: 42px solid transparent;
    -webkit-transition: .3s;
    transition: .3s;
    border-bottom-color: #04668c;
}
#login:after {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    border-top: 42px solid;
    border-right: 42px solid transparent;
    -webkit-transition: .3s;
    transition: .3s;
    border-top-color: #04668c;
}
    </style>';
}
add_action('login_head', 'custom_login_logo');
