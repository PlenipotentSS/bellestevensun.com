<?php

register_post_type('dog',
  array(
    'labels' => array(
      'name' => __('Dogs'), /* This is the Title of the Group */
      'singular_name' => __('Dog'), /* This is the individual type */
      'all_items' => __('All Dogs'), /* the all items menu item */
      'add_new' => __('Add Dog'), /* The add new menu item */
      'add_new_item' => __('Add New Dog'), /* Add New Display Title */
      'edit' => __( 'Edit'), /* Edit Dialog */
      'edit_item' => __('Edit Dog'), /* Edit Display Title */
      'new_item' => __('New Dog'), /* New Display Title */
      'view_item' => __('View Dog'), /* View Display Title */
      'search_items' => __('Search Dogs'), /* Search Custom Type Title */
      'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
      'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
    ), /* end of arrays */
    'description' => __( 'This is an dog'), /* Custom Type Description */
    'public' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'show_ui' => true,
    'query_var' => true,
    'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
    //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
    'rewrite' => array( 'slug' => 'dogs', 'with_front' => false ), /* you can specify its url slug */
    'has_archive' => 'dogs', /* you can rename the slug here */
    'capability_type' => 'page',
    'hierarchical' => false,
    /* the next one is important, it tells what's enabled in the post editor */
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'revisions', 'sticky', 'page-attributes', 'excerpt')
  )
)

?>
