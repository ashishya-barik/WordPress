<?php 
add_action('add_meta_boxes','pdetails_meta_box');


function pdetails_meta_box() {
    add_meta_box('meta_tag','Notice Date','meta_tag_callback','notice','side','high');
}


function meta_tag_callback($post)
{
    wp_nonce_field('pdetails_save','pdetails_meta_box_nonce');
    $metadescurl =  get_post_meta($post->ID,'meta_tag_key',false);

    ?>
    <p><input type="text" name="meta_tag_field" value="<?php echo @$metadescurl[0]['notice_date']; ?>" style="width: 100%;"></p>
    <?php 
}

//Save Meta Data

function pdetails_save( $post_id ) {
 
    if( ! isset($_POST['pdetails_meta_box_nonce'])) {
        return;
    }
 
    if( ! wp_verify_nonce( $_POST['pdetails_meta_box_nonce'], 'pdetails_save') ) {
        return;
    }
 
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }
 
    if( ! current_user_can('edit_post', $post_id)) {
        return;
    }
 
    $metatag_urls = [ 
        'notice_date' => $_POST['meta_tag_field']   
    ];

    update_post_meta( $post_id,'meta_tag_key', $metatag_urls );
}
add_action('save_post','pdetails_save');
