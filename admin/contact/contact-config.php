<?php

function LOE_contact_form_custom_post(){
    $labels = array(
        'name'              => 'Messages',
        'singular_name'     => 'Message',
        'menu_name'         => 'Inbox',
        'menu_admin_bar'    => 'Message',
        'edit_item'         => 'Sorry, you cannot edit messages. You can only delete them.'
    );


    $args = array(
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'capability_type'   => 'post',
        'capabilities' => array(
            'create_posts' => 'do_not_allow'
            ),
        'map_meta_cap' => true,
        'hierarchical'      => false,
        'menu_position'     => 100,
        'menu_icon'         => get_template_directory_uri().'/img/icon.png',
        'supports'          => false
    );
    register_post_type( 'loe_contact', $args );
    
}



function LOE_set_contact_columns( $columns ){
    
    $newColumn = array(
        'cb'        => $columns['cb'],
        'title'     => __('Name'),
        'message'     => __('Message'),
        'email'     => __('Email'),
        'date'     => __('Date')
    );
    return $newColumn;

}


function LOE_contact_custom_column($column, $post_id){
    switch($column){
        case 'message' :
            echo get_the_content();
            break;
        case 'email' :
            $email = get_post_meta( $post_id, '_contact_email_key', true );
            echo '<a href="mailto:'.$email.'">'.$email.'</a>';
            break;
    }
}
