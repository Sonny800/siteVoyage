<?php

function cdv_customize_register( $wp_customize ) {

  $wp_customize->add_panel('cdv_theme_panel', [
    'title' => 'cdv',
    'description' => 'cdv',
    'priority' => 1
  ]);

create_section_header($wp_customize, 'cdv_theme_panel');
create_section_carousel($wp_customize, 'cdv_theme_panel');
create_section_footer($wp_customize, 'cdv_theme_panel');
create_section_posts($wp_customize, 'cdv_theme_panel');

}

function create_section_header($wp_customize, $panel_id) {

  $wp_customize->add_section('cdv_section_header',
    [
      'panel' => $panel_id,
      'title' => 'Gestion du header'
    ]
  );

  $wp_customize->add_setting(
  'cdv_section_header_img',
  [

  ]
);

    $wp_customize->add_control(
    new WP_Customize_Upload_Control(
    $wp_customize,
    'cdv_section_header_img',
    array(
        'label'      => __( 'Background Image', 'mytheme' ),
        'section'    => 'cdv_section_header',
        'settings'   => 'cdv_section_header_img',
) )
);
}


function create_section_carousel($wp_customize, $panel_id){
  $wp_customize->add_section( 'cdv_home_carousel' , [
    'title' => 'Carousel',
    'panel' => $panel_id
  ]);

  for ($i=1; $i < 4; $i++) {
    $wp_customize->add_setting( 'cdv_home_carousel_page'.$i, array(
        'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( 'cdv_home_carousel_page'.$i, array(
      'type' => 'dropdown-pages',
      'allow_addition' => true,
      'section' => 'cdv_home_carousel',
      'label' =>  sprintf(__( 'Slide #%s', 'cdv'),$i),
      'description' => sprintf(__( 'Select a page for the slide #%s', 'cdv' ),$i),
    ) );
  }

  $wp_customize->add_setting( 'cdv_home_carousel_interval', array(
    'capability' => 'edit_theme_options',
    'default' => 5000
  ) );

  $wp_customize->add_control( 'cdv_home_carousel_interval', array(
  'type' => 'text',
  'section' => 'cdv_home_carousel',
  'label' => __( 'Interval between 2 slides (ms)', 'cdv' ),
  ) );

}

function create_section_footer($wp_customize, $panel_id) {

    $wp_customize->add_section('cdv_section_footer', [
        'title' => 'Gestion du Footer',
        'panel' => $panel_id
    ]);

    $wp_customize->add_setting('cdv_section_footer_text', [
        'default' => 'Carnet de voyage'
    ]);

    $wp_customize->add_control('cdv_section_footer_text', [
        'section' => 'cdv_section_footer',
        'label' => 'Contenu du footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting(
        'cdv_section_footer_bgcolor',
        [
            'default' => '#000000',
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bgcolor',
            [
                'label' => 'Couleur de fond',
                'section' => 'cdv_section_footer',
                'settings' => 'cdv_section_footer_bgcolor'
            ]
            )
        );

    }


    function create_section_posts($wp_customize, $panel_id) {
      $cdv_categs = get_categories(array('hide_empty' => 0));
      foreach ($cdv_categs as $cdv_categ) {
        $cdv_cat[$cdv_categ->term_id] = $cdv_categ->cat_name;
      }

      $wp_customize->add_section( 'cdv_posts' , [
        'title' => __('Gestion des Posts Continents'),
        'panel' => $panel_id,
      ]);

        // Afrique
        $wp_customize->add_setting('cdv_posts_cat_af', []);

      	$wp_customize->add_control('cdv_posts_cat_af',

      	        array(
                  'type' => 'select',
      	            'label' => __( 'Afrique', 'cdv' ),
      	            'section' => 'cdv_posts',
      	            'choices' => $cdv_cat
      	        )

      	);
        $wp_customize->add_setting('cdv_posts_num_af', []);

      	$wp_customize->add_control('cdv_posts_num_af',

      	        array(
                  'type' => 'number',
      	            'label' => __( 'Nombres d\'articles', 'cdv' ),
      	            'section' => 'cdv_posts',

      	        )

      	);

        // Amérique
        $wp_customize->add_setting('cdv_posts_cat_am', []);

      	$wp_customize->add_control('cdv_posts_cat_am',

      	        array(
                  'type' => 'select',
      	            'label' => __( 'Amérique', 'cdv' ),
      	            'section' => 'cdv_posts',
      	            'choices' => $cdv_cat
      	        )

      	);
        $wp_customize->add_setting('cdv_posts_num_am', []);

      	$wp_customize->add_control('cdv_posts_num_am',

      	        array(
                  'type' => 'number',
      	            'label' => __( 'Nombres d\'articles', 'cdv' ),
      	            'section' => 'cdv_posts',

      	        )

      	);

        // Asie
        $wp_customize->add_setting('cdv_posts_cat_as', []);

      	$wp_customize->add_control('cdv_posts_cat_as',

      	        array(
                  'type' => 'select',
      	            'label' => __( 'Asie', 'cdv' ),
      	            'section' => 'cdv_posts',
      	            'choices' => $cdv_cat
      	        )

      	);
        $wp_customize->add_setting('cdv_posts_num_as', []);

      	$wp_customize->add_control('cdv_posts_num_as',

      	        array(
                  'type' => 'number',
      	            'label' => __( 'Nombres d\'articles', 'cdv' ),
      	            'section' => 'cdv_posts',

      	        )

      	);

        // Europe
        $wp_customize->add_setting('cdv_posts_cat_eu', []);

      	$wp_customize->add_control('cdv_posts_cat_eu',

      	        array(
                  'type' => 'select',
      	            'label' => __( 'Europe', 'cdv' ),
      	            'section' => 'cdv_posts',
      	            'choices' => $cdv_cat
      	        )

      	);
        $wp_customize->add_setting('cdv_posts_num_eu', []);

      	$wp_customize->add_control('cdv_posts_num_eu',

      	        array(
                  'type' => 'number',
      	            'label' => __( 'Nombres d\'articles', 'cdv' ),
      	            'section' => 'cdv_posts',

      	        )

      	);

        // Océanie
        $wp_customize->add_setting('cdv_posts_cat_oc', []);

      	$wp_customize->add_control('cdv_posts_cat_oc',

      	        array(
                  'type' => 'select',
      	            'label' => __( 'Océanie', 'cdv' ),
      	            'section' => 'cdv_posts',
      	            'choices' => $cdv_cat
      	        )

      	);
        $wp_customize->add_setting('cdv_posts_num_oc', []);

      	$wp_customize->add_control('cdv_posts_num_oc',

      	        array(
                  'type' => 'number',
      	            'label' => __( 'Nombres d\'articles', 'cdv' ),
      	            'section' => 'cdv_posts',

      	        )

      	);

    }



add_action('customize_register', 'cdv_customize_register');
