<?php
/**
 * Custom Post Type pays
 *
 */
function carnetdevoyages_register_cpt_pays() {
  $labels = [
    'name'               => 'Pays',
		'singular_name'      => 'Pays',
		'menu_name'          => 'Pays',
		'name_admin_bar'     => 'Pays',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau Pays',
		'all_items'          => 'Tous les Pays',
  ];
  $cpt_args = [
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'menu_position' => 50,
    'menu_icon' => 'dashicons-admin-site',
    'hierarchical' => false,
    'supports' => [
      'title',
      'editor',
      'thumbnail',
      'excerpt',
      'custom-fields'
    ],
    'rewrite' => [
      'slug' => 'pays-type'
    ]
  ];
  register_post_type('pays', $cpt_args);

// REGISTER TAXONOMY (avoir les genres de catégorie tout ça dans wordpress pour ce type de post custom )
$taxo_type_args = [
    'label' => 'Continent',
    'hierarchical' => true,
];

  register_taxonomy('type', ['pays'], $taxo_type_args);
}

add_action('init', 'carnetdevoyages_register_cpt_pays');
