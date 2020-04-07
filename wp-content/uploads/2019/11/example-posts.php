<?php
/**
 * Plugin Name: Idea Custom Post Type
 */

 function ideapro_custom_posttype() {
     register_post_type('Example', 
        array(
        'labels'=>array(
                'name'=>__('Examples'),
                'singular_name'=>__('Example'),
                'add_new'=>__('Add New Example'),
                'add_new_item'=>__('Add New Example'),
                'edit_item'=>__('Edit Example'),
                'search_items'=>__('Search Example'),
            ),
          'menu_postion'=> 5,
          'public'=>true,
          'exclude_from_search'=>true,
          'resgister_metabox_cb'=>'example_metabox',
          'supports'=>array(
              'title',
              'editor',
              'thumbnail')  
        )
    );
 }
add_action('init', 'ideapro_custom_posttype');