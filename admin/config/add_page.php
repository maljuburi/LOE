
<?php


// Add New Page On Theme Activation
function Create_New_Page($new_page_title, $new_page_content, $new_page_template){


  $page_check = get_page_by_title($new_page_title);
  
  $new_page = array(
    'post_type' => 'page',
    'post_title' => $new_page_title,
    'post_content' => $new_page_content,
    'post_status' => 'publish',
    'post_author' => 1,

  );

  if(!isset($page_check->ID)){
    $new_page_id = wp_insert_post($new_page);
    if(!empty($new_page_template)){
      update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
    }
  }

}


// Add Page to Navigation .. Comment below if not necessary

// function add_page_to_menu($page_id, $page_title, $menu_id, $parent = 0){
//     wp_update_nav_menu_item($menu_id, 0, 
//       array(  'menu-item-title' => $page_title,
//             'menu-item-object' => 'page',
//             'menu-item-object-id' => $page_id,
//             'menu-item-type' => 'post_type',
//             'menu-item-status' => 'publish',
//             'menu-item-parent-id' => $parent));
//   }