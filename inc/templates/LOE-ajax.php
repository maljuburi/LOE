
<?php


function LOE_submit_form(){

    $name = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);
    
    $args = array(
        'post_title'        => $name,
        'post_content'      => $message,
        'post_author'       => 1,
        'post_status'       => 'publish',
        'post_type'         => 'loe_contact',
        'meta_input'        => array(
            '_contact_email_key' =>$email
        )

    );
    $postID = wp_insert_post($args);
    echo $postID;

    die();
}