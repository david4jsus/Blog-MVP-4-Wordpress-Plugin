<?php
/*
Plugin Name: Blog Wordpress Plugin
Description: Plugin to register some custom post types and taxonomies
Version: 1.0
Author: David Valenzuela González
License: GPLv3
*/

/**
 * Function to register all post types and taxonomies that the blog will need
 */
function dvg_register_post_types_and_taxonomies() {

   /**
    * Post Type: Games
    */

   $labels = [
      'name' => esc_html__( 'Games', 'twentytwentythree' ),
      'singular_name' => esc_html__( 'Game', 'twentytwentythree' ),
      'menu_name' => esc_html__( 'My Games', 'twentytwentythree' ),
      'all_items' => esc_html__( 'All Games', 'twentytwentythree' ),
      'add_new' => esc_html__( 'Add new', 'twentytwentythree' ),
      'add_new_item' => esc_html__( 'Add new Game', 'twentytwentythree' ),
      'edit_item' => esc_html__( 'Edit Game', 'twentytwentythree' ),
      'new_item' => esc_html__( 'New Game', 'twentytwentythree' ),
      'view_item' => esc_html__( 'View Game', 'twentytwentythree' ),
      'view_items' => esc_html__( 'View Games', 'twentytwentythree' ),
      'search_items' => esc_html__( 'Search Games', 'twentytwentythree' ),
      'not_found' => esc_html__( 'No Games found', 'twentytwentythree' ),
      'not_found_in_trash' => esc_html__( 'No Games found in trash', 'twentytwentythree' ),
      'parent' => esc_html__( 'Parent Game:', 'twentytwentythree' ),
      'featured_image' => esc_html__( 'Featured image for this Game', 'twentytwentythree' ),
      'set_featured_image' => esc_html__( 'Set featured image for this Game', 'twentytwentythree' ),
      'remove_featured_image' => esc_html__( 'Remove featured image for this Game', 'twentytwentythree' ),
      'use_featured_image' => esc_html__( 'Use as featured image for this Game', 'twentytwentythree' ),
      'archives' => esc_html__( 'Game archives', 'twentytwentythree' ),
      'insert_into_item' => esc_html__( 'Insert into Game', 'twentytwentythree' ),
      'uploaded_to_this_item' => esc_html__( 'Upload to this Game', 'twentytwentythree' ),
      'filter_items_list' => esc_html__( 'Filter Games list', 'twentytwentythree' ),
      'items_list_navigation' => esc_html__( 'Games list navigation', 'twentytwentythree' ),
      'items_list' => esc_html__( 'Games list', 'twentytwentythree' ),
      'attributes' => esc_html__( 'Games attributes', 'twentytwentythree' ),
      'name_admin_bar' => esc_html__( 'Game', 'twentytwentythree' ),
      'item_published' => esc_html__( 'Game published', 'twentytwentythree' ),
      'item_published_privately' => esc_html__( 'Game published privately.', 'twentytwentythree' ),
      'item_reverted_to_draft' => esc_html__( 'Game reverted to draft.', 'twentytwentythree' ),
      'item_scheduled' => esc_html__( 'Game scheduled', 'twentytwentythree' ),
      'item_updated' => esc_html__( 'Game updated.', 'twentytwentythree' ),
      'parent_item_colon' => esc_html__( 'Parent Game:', 'twentytwentythree' ),
   ];

   $args = [
      'label' => esc_html__( 'Games', 'twentytwentythree' ),
      'labels' => $labels,
      'description' => 'Information about a game',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'rest_base' => '',
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'rest_namespace' => 'wp/v2',
      'has_archive' => false,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'delete_with_user' => false,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'can_export' => false,
      'rewrite' => [ 'slug' => 'games', 'with_front' => true ],
      'query_var' => true,
      'menu_icon' => 'dashicons-games',
      'supports' => [ 'title', 'editor', 'thumbnail' ],
      'taxonomies' => [ 'category', 'post_tag' ],
   ];

   register_post_type( 'games', $args );

   /**
    * Post Type: Albums
    */

   $labels = [
      'name' => esc_html__( 'Albums', 'twentytwentythree' ),
      'singular_name' => esc_html__( 'Album', 'twentytwentythree' ),
      'menu_name' => esc_html__( 'My Albums', 'twentytwentythree' ),
      'all_items' => esc_html__( 'All Albums', 'twentytwentythree' ),
      'add_new' => esc_html__( 'Add new', 'twentytwentythree' ),
      'add_new_item' => esc_html__( 'Add new Album', 'twentytwentythree' ),
      'edit_item' => esc_html__( 'Edit Album', 'twentytwentythree' ),
      'new_item' => esc_html__( 'New Album', 'twentytwentythree' ),
      'view_item' => esc_html__( 'View Album', 'twentytwentythree' ),
      'view_items' => esc_html__( 'View Albums', 'twentytwentythree' ),
      'search_items' => esc_html__( 'Search Albums', 'twentytwentythree' ),
      'not_found' => esc_html__( 'No Albums found', 'twentytwentythree' ),
      'not_found_in_trash' => esc_html__( 'No Albums found in trash', 'twentytwentythree' ),
      'parent' => esc_html__( 'Parent Album:', 'twentytwentythree' ),
      'featured_image' => esc_html__( 'Featured image for this Album', 'twentytwentythree' ),
      'set_featured_image' => esc_html__( 'Set featured image for this Album', 'twentytwentythree' ),
      'remove_featured_image' => esc_html__( 'Remove featured image for this Album', 'twentytwentythree' ),
      'use_featured_image' => esc_html__( 'Use as featured image for this Album', 'twentytwentythree' ),
      'archives' => esc_html__( 'Album archives', 'twentytwentythree' ),
      'insert_into_item' => esc_html__( 'Insert into Album', 'twentytwentythree' ),
      'uploaded_to_this_item' => esc_html__( 'Upload to this Album', 'twentytwentythree' ),
      'filter_items_list' => esc_html__( 'Filter Albums list', 'twentytwentythree' ),
      'items_list_navigation' => esc_html__( 'Albums list navigation', 'twentytwentythree' ),
      'items_list' => esc_html__( 'Albums list', 'twentytwentythree' ),
      'attributes' => esc_html__( 'Albums attributes', 'twentytwentythree' ),
      'name_admin_bar' => esc_html__( 'Album', 'twentytwentythree' ),
      'item_published' => esc_html__( 'Album published', 'twentytwentythree' ),
      'item_published_privately' => esc_html__( 'Album published privately.', 'twentytwentythree' ),
      'item_reverted_to_draft' => esc_html__( 'Album reverted to draft.', 'twentytwentythree' ),
      'item_scheduled' => esc_html__( 'Album scheduled', 'twentytwentythree' ),
      'item_updated' => esc_html__( 'Album updated.', 'twentytwentythree' ),
      'parent_item_colon' => esc_html__( 'Parent Album:', 'twentytwentythree' ),
   ];

   $args = [
      'label' => esc_html__( 'Albums', 'twentytwentythree' ),
      'labels' => $labels,
      'description' => 'Information about an album',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'rest_base' => '',
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'rest_namespace' => 'wp/v2',
      'has_archive' => false,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'delete_with_user' => false,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'can_export' => false,
      'rewrite' => [ 'slug' => 'albums', 'with_front' => true ],
      'query_var' => true,
      'menu_icon' => 'dashicons-album',
      'supports' => [ 'title', 'thumbnail' ],
      'taxonomies' => [ 'category', 'post_tag' ],
   ];

   register_post_type( 'albums', $args );

   /**
    * Post Type: Tracks
    */

   $labels = [
      'name' => esc_html__( 'Tracks', 'twentytwentythree' ),
      'singular_name' => esc_html__( 'Track', 'twentytwentythree' ),
      'menu_name' => esc_html__( 'My Tracks', 'twentytwentythree' ),
      'all_items' => esc_html__( 'All Tracks', 'twentytwentythree' ),
      'add_new' => esc_html__( 'Add new', 'twentytwentythree' ),
      'add_new_item' => esc_html__( 'Add new Track', 'twentytwentythree' ),
      'edit_item' => esc_html__( 'Edit Track', 'twentytwentythree' ),
      'new_item' => esc_html__( 'New Track', 'twentytwentythree' ),
      'view_item' => esc_html__( 'View Track', 'twentytwentythree' ),
      'view_items' => esc_html__( 'View Tracks', 'twentytwentythree' ),
      'search_items' => esc_html__( 'Search Tracks', 'twentytwentythree' ),
      'not_found' => esc_html__( 'No Tracks found', 'twentytwentythree' ),
      'not_found_in_trash' => esc_html__( 'No Tracks found in trash', 'twentytwentythree' ),
      'parent' => esc_html__( 'Parent Track:', 'twentytwentythree' ),
      'featured_image' => esc_html__( 'Featured image for this Track', 'twentytwentythree' ),
      'set_featured_image' => esc_html__( 'Set featured image for this Track', 'twentytwentythree' ),
      'remove_featured_image' => esc_html__( 'Remove featured image for this Track', 'twentytwentythree' ),
      'use_featured_image' => esc_html__( 'Use as featured image for this Track', 'twentytwentythree' ),
      'archives' => esc_html__( 'Track archives', 'twentytwentythree' ),
      'insert_into_item' => esc_html__( 'Insert into Track', 'twentytwentythree' ),
      'uploaded_to_this_item' => esc_html__( 'Upload to this Track', 'twentytwentythree' ),
      'filter_items_list' => esc_html__( 'Filter Tracks list', 'twentytwentythree' ),
      'items_list_navigation' => esc_html__( 'Tracks list navigation', 'twentytwentythree' ),
      'items_list' => esc_html__( 'Tracks list', 'twentytwentythree' ),
      'attributes' => esc_html__( 'Tracks attributes', 'twentytwentythree' ),
      'name_admin_bar' => esc_html__( 'Track', 'twentytwentythree' ),
      'item_published' => esc_html__( 'Track published', 'twentytwentythree' ),
      'item_published_privately' => esc_html__( 'Track published privately.', 'twentytwentythree' ),
      'item_reverted_to_draft' => esc_html__( 'Track reverted to draft.', 'twentytwentythree' ),
      'item_scheduled' => esc_html__( 'Track scheduled', 'twentytwentythree' ),
      'item_updated' => esc_html__( 'Track updated.', 'twentytwentythree' ),
      'parent_item_colon' => esc_html__( 'Parent Track:', 'twentytwentythree' ),
   ];

   $args = [
      'label' => esc_html__( 'Tracks', 'twentytwentythree' ),
      'labels' => $labels,
      'description' => 'Musical tracks',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'rest_base' => '',
      'rest_controller_class' => 'WP_REST_Posts_Controller',
      'rest_namespace' => 'wp/v2',
      'has_archive' => false,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'delete_with_user' => false,
      'exclude_from_search' => true,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'can_export' => false,
      'rewrite' => [ 'slug' => 'tracks', 'with_front' => true ],
      'query_var' => true,
      'menu_icon' => 'dashicons-format-audio',
      'supports' => [ 'title' ],
      'taxonomies' => [ 'category', 'post_tag' ],
   ];

   register_post_type( 'tracks', $args );
   
   /**
    * Taxonomy: Games
    */

   $labels = [
      'name' => esc_html__( 'Games', 'twentytwentythree' ),
      'singular_name' => esc_html__( 'Game', 'twentytwentythree' ),
      'menu_name' => esc_html__( 'Games', 'twentytwentythree' ),
      'all_items' => esc_html__( 'All Games', 'twentytwentythree' ),
      'edit_item' => esc_html__( 'Edit Game', 'twentytwentythree' ),
      'view_item' => esc_html__( 'View Game', 'twentytwentythree' ),
      'update_item' => esc_html__( 'Update Game name', 'twentytwentythree' ),
      'add_new_item' => esc_html__( 'Add new Game', 'twentytwentythree' ),
      'new_item_name' => esc_html__( 'New Game name', 'twentytwentythree' ),
      'parent_item' => esc_html__( 'Parent Game', 'twentytwentythree' ),
      'parent_item_colon' => esc_html__( 'Parent Game:', 'twentytwentythree' ),
      'search_items' => esc_html__( 'Search Games', 'twentytwentythree' ),
      'popular_items' => esc_html__( 'Popular Games', 'twentytwentythree' ),
      'separate_items_with_commas' => esc_html__( 'Separate Games with commas', 'twentytwentythree' ),
      'add_or_remove_items' => esc_html__( 'Add or remove Games', 'twentytwentythree' ),
      'choose_from_most_used' => esc_html__( 'Choose from the most used Games', 'twentytwentythree' ),
      'not_found' => esc_html__( 'No Games found', 'twentytwentythree' ),
      'no_terms' => esc_html__( 'No Games', 'twentytwentythree' ),
      'items_list_navigation' => esc_html__( 'Games list navigation', 'twentytwentythree' ),
      'items_list' => esc_html__( 'Games list', 'twentytwentythree' ),
      'back_to_items' => esc_html__( 'Back to Games', 'twentytwentythree' ),
      'name_field_description' => esc_html__( 'The name is how it appears on your site.', 'twentytwentythree' ),
      'parent_field_description' => esc_html__( 'Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.', 'twentytwentythree' ),
      'slug_field_description' => esc_html__( 'The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'twentytwentythree' ),
      'desc_field_description' => esc_html__( 'The description is not prominent by default; however, some themes may show it.', 'twentytwentythree' ),
   ];

   
   $args = [
      'label' => esc_html__( 'Games', 'twentytwentythree' ),
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'hierarchical' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'query_var' => true,
      'rewrite' => [ 'slug' => 'games-tax', 'with_front' => true, ],
      'show_admin_column' => false,
      'show_in_rest' => true,
      'show_tagcloud' => false,
      'rest_base' => 'games-tax',
      'rest_controller_class' => 'WP_REST_Terms_Controller',
      'rest_namespace' => 'wp/v2',
      'show_in_quick_edit' => false,
      'sort' => false,
   ];
   
   register_taxonomy( 'games-tax', [ 'post', 'games', 'albums' ], $args );

   /**
    * Taxonomy: Albums
    */

   $labels = [
      'name' => esc_html__( 'Albums', 'twentytwentythree' ),
      'singular_name' => esc_html__( 'Album', 'twentytwentythree' ),
      'menu_name' => esc_html__( 'Albums', 'twentytwentythree' ),
      'all_items' => esc_html__( 'All Albums', 'twentytwentythree' ),
      'edit_item' => esc_html__( 'Edit Album', 'twentytwentythree' ),
      'view_item' => esc_html__( 'View Album', 'twentytwentythree' ),
      'update_item' => esc_html__( 'Update Album name', 'twentytwentythree' ),
      'add_new_item' => esc_html__( 'Add new Album', 'twentytwentythree' ),
      'new_item_name' => esc_html__( 'New Album name', 'twentytwentythree' ),
      'parent_item' => esc_html__( 'Parent Album', 'twentytwentythree' ),
      'parent_item_colon' => esc_html__( 'Parent Album:', 'twentytwentythree' ),
      'search_items' => esc_html__( 'Search Albums', 'twentytwentythree' ),
      'popular_items' => esc_html__( 'Popular Albums', 'twentytwentythree' ),
      'separate_items_with_commas' => esc_html__( 'Separate Albums with commas', 'twentytwentythree' ),
      'add_or_remove_items' => esc_html__( 'Add or remove Albums', 'twentytwentythree' ),
      'choose_from_most_used' => esc_html__( 'Choose from the most used Albums', 'twentytwentythree' ),
      'not_found' => esc_html__( 'No Albums found', 'twentytwentythree' ),
      'no_terms' => esc_html__( 'No Albums', 'twentytwentythree' ),
      'items_list_navigation' => esc_html__( 'Albums list navigation', 'twentytwentythree' ),
      'items_list' => esc_html__( 'Albums list', 'twentytwentythree' ),
      'back_to_items' => esc_html__( 'Back to Albums', 'twentytwentythree' ),
      'name_field_description' => esc_html__( 'The name is how it appears on your site.', 'twentytwentythree' ),
      'parent_field_description' => esc_html__( 'Assign a parent term to create a hierarchy. The term Jazz, for example, would be the parent of Bebop and Big Band.', 'twentytwentythree' ),
      'slug_field_description' => esc_html__( 'The slug is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'twentytwentythree' ),
      'desc_field_description' => esc_html__( 'The description is not prominent by default; however, some themes may show it.', 'twentytwentythree' ),
   ];

   
   $args = [
      'label' => esc_html__( 'Albums', 'twentytwentythree' ),
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'hierarchical' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'query_var' => true,
      'rewrite' => [ 'slug' => 'albums-tax', 'with_front' => true, ],
      'show_admin_column' => false,
      'show_in_rest' => true,
      'show_tagcloud' => false,
      'rest_base' => 'albums-tax',
      'rest_controller_class' => 'WP_REST_Terms_Controller',
      'rest_namespace' => 'wp/v2',
      'show_in_quick_edit' => false,
      'sort' => false,
   ];

   register_taxonomy( 'albums-tax', [ 'albums', 'tracks' ], $args );
}
add_action( 'init', 'dvg_register_post_types_and_taxonomies' );

/**
 * Add custom meta boxes to each post type editor page
 */
function dvg_add_custom_boxes() {
   
   /**
    * Games post type
    */
   
   add_meta_box(
      'dvg_games_developer',
      'Developer',
      'dvg_html_developer',
      'games'
   );
   function dvg_html_developer( $game ) {
      $value = get_post_meta( $game->ID, '_dvg_games_developer', true );
      ?>
      <label for='dvg_developer_field'>Developer</label>
      <input type='text' id='dvg_developer_field' name='dvg_developer_field' value=<?php echo $value ?>>
      <?php
   }

   add_meta_box(
      'dvg_games_publisher',
      'Publisher',
      'dvg_html_publisher',
      'games'
   );
   function dvg_html_publisher( $game ) {
      $value = get_post_meta( $game->ID, '_dvg_games_publisher', true );
      ?>
      <label for='dvg_publisher_field'>Publisher</label>
      <input type='text' id='dvg_publisher_field' name='dvg_publisher_field' value=<?php echo $value ?>>
      <?php
   }
   
   add_meta_box(
      'dvg_games_release_date',
      'Release Date',
      'dvg_html_release_date',
      'games'
   );
   function dvg_html_release_date( $game ) {
      $value = get_post_meta( $game->ID, '_dvg_games_release_date', true );
      ?>
      <label for='dvg_release_date_field'>Release Date</label>
      <input type='date' id='dvg_release_date_field' name='dvg_release_date_field' value=<?php echo $value ?>>
      <?php
   }

   /**
    * Tracks post type
    */
   
   add_meta_box(
      'dvg_tracks_url',
      'URL',
      'dvg_html_url',
      'tracks'
   );
   function dvg_html_url( $track ) {
      $value = get_post_meta( $track->ID, '_dvg_tracks_url', true );
      ?>
      <label for='dvg_url_field'>SoundCloud URL</label>
      <input type='text' id='dvg_url_field' name='dvg_url_field' value=<?php echo $value ?>>
      <?php
   }
   
   add_meta_box(
      'dvg_tracks_length',
      'Length',
      'dvg_html_length',
      'tracks'
   );
   function dvg_html_length( $track ) {
      $value = get_post_meta( $track->ID, '_dvg_tracks_length', true );
      ?>
      <label for='dvg_length_field'>Length</label>
      <input type='text' id='dvg_length_field' name='dvg_length_field' value=<?php echo $value ?>>
      <?php
   }
}
add_action( 'add_meta_boxes', 'dvg_add_custom_boxes' );

/**
 * Allow saving data in meta boxes
 */
function dvg_save_meta( $post_id ) {

   /**
    * Games: Developer
    */
   if ( array_key_exists( 'dvg_developer_field', $_POST ) ) {
      update_post_meta(
         $post_id,
         '_dvg_games_developer',
         sanitize_text_field( $_POST['dvg_developer_field'] )
      );
   }

   /**
    * Games: Publisher
    */
   if ( array_key_exists( 'dvg_publisher_field', $_POST ) ) {
      update_post_meta(
         $post_id,
         '_dvg_games_publisher',
         sanitize_text_field( $_POST['dvg_publisher_field'] )
      );
   }

   /**
    * Games: Release Date
    */
   if ( array_key_exists( 'dvg_release_date_field', $_POST ) ) {
      update_post_meta(
         $post_id,
         '_dvg_games_release_date',
         $_POST['dvg_release_date_field']
      );
   }

   /**
    * Tracks: URL
    */
   if ( array_key_exists( 'dvg_url_field', $_POST ) ) {
      update_post_meta(
         $post_id,
         '_dvg_tracks_url',
         sanitize_text_field( $_POST['dvg_url_field'] )
      );
   }

   /**
    * Tracks: Length
    */
   if ( array_key_exists( 'dvg_length_field', $_POST ) ) {
      update_post_meta(
         $post_id,
         '_dvg_tracks_length',
         sanitize_text_field( $_POST['dvg_length_field'] )
      );
   }
}
add_action( 'save_post', 'dvg_save_meta' );

/**
 * Create API endpoints to get custom data
 */
function dvg_get_game_developer_api( $game ) {
   return get_post_meta( $game['id'] )['_dvg_games_developer'][0];
}
function dvg_get_game_publisher_api( $game ) {
   return get_post_meta( $game['id'] )['_dvg_games_publisher'][0];
}
function dvg_get_game_release_date_api( $game ) {
   return get_post_meta( $game['id'] )['_dvg_games_release_date'][0];
}
function dvg_get_thumb( $object ) {
   if ( $object['featured_media'] ) {
      return wp_get_attachment_image_src( $object['featured_media'] );
   }
   return false;
}
function dvg_get_album_game_name_api( $album ) {
   if (empty($album['games-tax'])) {
      return null;
   }
   $posts = get_posts(
      array(
         'post_type' => 'games',
         'tax_query' => array(
            'taxonomy' => 'games-tax',
            'field' => 'term_id',
            'terms' => $album['games-tax'][0]
         )
      )
   );
   return $posts[0]->post_title;
}
function dvg_get_track_url_api( $track ) {
   return get_post_meta( $track['id'] )['_dvg_tracks_url'][0];
}
function dvg_get_track_length_api( $track ) {
   return get_post_meta( $track['id'] )['_dvg_tracks_length'][0];
}
function dvg_api_meta() {

   /**
    * Posts: Featured image
    */
    register_rest_field(
      'post',
      'post_featured_image',
      array(
         'get_callback'    => 'dvg_get_thumb',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Games: Developer
    */
   register_rest_field(
      'games',
      'game_developer',
      array(
         'get_callback'    => 'dvg_get_game_developer_api',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Games: Publisher
    */
   register_rest_field(
      'games',
      'game_publisher',
      array(
         'get_callback'    => 'dvg_get_game_publisher_api',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Games: Release date
    */
   register_rest_field(
      'games',
      'game_release_date',
      array(
         'get_callback'    => 'dvg_get_game_release_date_api',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Games: Featured image
    */
   register_rest_field(
      'games',
      'game_featured_image',
      array(
         'get_callback'    => 'dvg_get_thumb',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Albums: Featured image
    */
   register_rest_field(
      'albums',
      'album_featured_image',
      array(
         'get_callback'    => 'dvg_get_thumb',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Albums: Related game name
    */
   register_rest_field(
      'albums',
      'album_game_name',
      array(
         'get_callback'    => 'dvg_get_album_game_name_api',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Tracks: Length
    */
   register_rest_field(
      'tracks',
      'track_length',
      array(
         'get_callback'    => 'dvg_get_track_length_api',
         'update_callback' => null,
         'schema'          => null
      )
   );

   /**
    * Tracks: SoundCloud URL
    */
   register_rest_field(
      'tracks',
      'track_url',
      array(
         'get_callback'    => 'dvg_get_track_url_api',
         'update_callback' => null,
         'schema'          => null
      )
   );
}
add_action( 'rest_api_init', 'dvg_api_meta' );