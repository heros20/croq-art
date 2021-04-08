<?php
/**
 * Register a custom post type called "menu".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_menu_init() {
    $labels = array(
        'name'                  => _x( 'menu', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'menu', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'menu', 'Admin Menu text', 'blank_1' ),
        'name_admin_bar'        => _x( 'menu', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un nouveau menu', 'blank_1' ),
        'add_new_item'          => __('Ajouter un nouveau menu', 'blank_1' ),
        'new_item'              => __('Nouveau menu', 'blank_1' ),
        'edit_item'             => __( 'Modifier un menu', 'blank_1' ),
        'view_item'             => __( 'Voir le menu', 'blank_1' ),
        'all_items'             => __( 'Tous les menus', 'blank_1' ),
        'search_items'          => __( 'Rechercher des menus', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent des menus:', 'blank_1' ),
        'not_found'             => __( 'Aucun menus trouvé.', 'blank_1' ),
        'not_found_in_trash'    => __( 'Aucun menu trouvé dans la corbeille.', 'blank_1' ),
        'featured_image'        => _x( 'Image de couverture du menu', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir l\'image de couverture', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer l\'image de couverture', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme image de couverture', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'menu archivée', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Inserer dans menu', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Télécharger une image pour menu', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'liste des menu filtré', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Navigation dans la liste des menus ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste des menus ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'menu' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-carrot'
    );
 
    register_post_type( 'menu', $args );
}
 
add_action( 'init', 'wpdocs_codex_menu_init' );