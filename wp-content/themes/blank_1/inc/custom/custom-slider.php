<?php
/**
 * Register a custom post type called "gallery".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_gallery_init() {
    $labels = array(
        'name'                  => _x( 'gallery', 'Post type general name', 'blank_1' ),
        'singular_name'         => _x( 'gallery', 'Post type singular name', 'blank_1' ),
        'menu_name'             => _x( 'gallery', 'Admin Menu text', 'blank_1' ),
        'name_admin_bar'        => _x( 'gallery', 'Add New on Toolbar', 'blank_1' ),
        'add_new'               => __( 'Ajouter un nouveau', 'blank_1' ),
        'add_new_item'          => __('Ajouter une nouvelle image', 'blank_1' ),
        'new_item'              => __('Nouvelle image', 'blank_1' ),
        'edit_item'             => __( 'Modifier une image', 'blank_1' ),
        'view_item'             => __( 'Voir la image', 'blank_1' ),
        'all_items'             => __( 'Toutes les images', 'blank_1' ),
        'search_items'          => __( 'Rechercher des images', 'blank_1' ),
        'parent_item_colon'     => __( 'Parent des images:', 'blank_1' ),
        'not_found'             => __( 'Aucune images trouvé.', 'blank_1' ),
        'not_found_in_trash'    => __( 'Aucune image trouvée dans la corbeille.', 'blank_1' ),
        'featured_image'        => _x( 'Image de couverture du image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'set_featured_image'    => _x( 'Définir l\'image du diaporama', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'remove_featured_image' => _x( 'Supprimer l\'image du diaporama', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'use_featured_image'    => _x( 'Utiliser comme image de diaporama', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'blank_1' ),
        'archives'              => _x( 'diaporama archivée', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'blank_1' ),
        'insert_into_item'      => _x( 'Inserer dans image', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'blank_1' ),
        'uploaded_to_this_item' => _x( 'Télécharger une image pour image', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'blank_1' ),
        'filter_items_list'     => _x( 'liste des image filtré', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'blank_1' ),
        'items_list_navigation' => _x( 'Navigation dans la liste images ', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'blank_1' ),
        'items_list'            => _x( 'Liste images ', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'blank_1' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title','thumbnail'),
        'menu_icon'          => 'dashicons-carrot'
    );
 
    register_post_type( 'gallery', $args );
}
 
add_action( 'init', 'wpdocs_codex_gallery_init' );