<?php
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

add_menu_page('Theme Option', 'Theme Setting', 'manage_options','contact-details', 'my_cool_plugin_settings_page','dashicons-admin-generic'); 

//call register settings function
add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
    
register_setting( 'my-cool-plugin-settings-group', 'sims_email' );
register_setting( 'my-cool-plugin-settings-group', 'sims_phone' );
register_setting( 'my-cool-plugin-settings-group', 'sims_whatsapp' ); 
register_setting( 'my-cool-plugin-settings-group', 'sims_youtube' );   
register_setting( 'my-cool-plugin-settings-group', 'sims_address' );
register_setting( 'my-cool-plugin-settings-group', 'sims_facebook' );
register_setting( 'my-cool-plugin-settings-group', 'sims_insta' );
register_setting( 'my-cool-plugin-settings-group', 'sims_twitter' );
register_setting( 'my-cool-plugin-settings-group', 'sims_lindin' );
register_setting( 'my-cool-plugin-settings-group', 'sims_footer_paragraph' );
}

function my_cool_plugin_settings_page() {
?>

<div class="wrap">
<div style="background: #c1c1c1; padding: 7px; width: 80%; margin:30px 3px 10px;"><h2 style="line-height: 1; margin: 0; font-size: 22px;">Theme Setting</h2></div>
<form method="post" action="options.php">
<style>
.form-table td {
    margin-bottom: 3px;
padding: 6px 10px;}
</style>
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <table class="form-table">
   
<tr valign="top">
    <td>
        <label>Email:</label><br>
        <input type="email" name="sims_email" value="<?php echo esc_attr( get_option('sims_email') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
    <td>

        <label>Phone:</label><br>
        <input type="number" name="sims_phone" value="<?php echo esc_attr( get_option('sims_phone') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
</tr>

<tr valign="top">
    <td>
        <label>Whatsapp Number:</label><br>
        <input type="number" name="sims_whatsapp" value="<?php echo esc_attr( get_option('sims_whatsapp') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
    <td>
    <label>Youtube URL:</label><br>
    <input type="url" name="sims_youtube" value="<?php echo esc_attr( get_option('sims_youtube') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
</tr>

<tr valign="top">
    <td>
        <label>Facebook URL:</label><br>
        <input type="url" name="sims_facebook" value="<?php echo esc_attr( get_option('sims_facebook') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
        <td>
        <label>Linkdin URL:</label><br>
        <input type="url" name="sims_lindin" value="<?php echo esc_attr( get_option('sims_lindin') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" />
    </td>
</tr>

<tr valign="top">
    <td>
        <label>Insta URL:</label><br>
        <input type="url" name="sims_insta" value="<?php echo esc_attr( get_option('sims_insta') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
    <td>
        <label>Twiiter URL:</label><br>
        <input type="url" name="sims_twitter" value="<?php echo esc_attr( get_option('sims_twitter') ); ?>" class="regular-text" style="height: 36px; margin-top: 10px;" /></td>
</tr>

<tr valign="top">
    <td colspan="2">
        <label>Address:</label><br>
        <textarea name="sims_address" style="width:100%; margin-top:10px; height: 60px;"><?php echo esc_attr( get_option('sims_address') ); ?></textarea>
    </td>
</tr>

<tr>
    <td colspan="2">
        <label>Footer Paragraph:</label><br>
        <textarea name="sims_footer_paragraph" style="width:100%; margin-top:10px; height: 60px;"><?php echo esc_attr( get_option('sims_footer_paragraph') ); ?></textarea>
    </td>
</tr>

</table>
<?php submit_button();?>
</form>
</div>
<?php } 
