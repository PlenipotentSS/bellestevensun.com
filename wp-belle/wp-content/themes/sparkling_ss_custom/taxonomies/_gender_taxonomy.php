<?php

register_taxonomy(
  'dog_gender',
  array('dog'),
  array(
    'hierarchical' => true,    /* if this is false, it acts like tags */
    'labels' => array(
      'name' => __( 'Dog Genders', 'bellini' ), /* name of the custom taxonomy */
      'singular_name' => __( 'Dog Gender', 'bellini' ), /* single taxonomy name */
      'search_items' =>  __( 'Search Dog Genders', 'bellini' ), /* search title for taxomony */
      'all_items' => __( 'All Dog Genders', 'bellini' ), /* all title for taxonomies */
      'parent_item' => __( 'Parent Dog Gender', 'bellini' ), /* parent title for taxonomy */
      'parent_item_colon' => __( 'Parent Dog Gender:', 'bellini' ), /* parent taxonomy title */
      'edit_item' => __( 'Edit Dog Gender', 'bellini' ), /* edit custom taxonomy title */
      'update_item' => __( 'Update Dog Gender', 'bellini' ), /* update title for taxonomy */
      'add_new_item' => __( 'Add New Dog Gender', 'bellini' ), /* add new title for taxonomy */
      'new_item_name' => __( 'New Dog Gender Name', 'bellini' ) /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dog-gender', 'with_front' => true ), /* you can specify its url slug */
  )
);

wp_insert_term(
  'Dog',
  'dog_gender', // the taxonomy
  array(
    'description'=> '',
    'slug' => 'dog',
  )
);

wp_insert_term(
  'Bitch',
  'dog_gender', // the taxonomy
  array(
    'description'=> '',
    'slug' => 'bitch',
  )
);

?>
