<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title>Carnet de Voyages</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">

		<!-- *************** HEADER ************** -->
		<header class="header" style="background-image: url(<?php echo get_theme_mod('cdv_section_header_img'); ?>)">

			<!-- **************** LOGO ************** -->
			<div class="logo">
				<a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a>
			</div>

            <!-- **************** SEARCH BAR ************** -->
            <div class="header-search">
                <?php get_search_form() ?>
            </div>

			<!-- **************** HEADER NAV *********** -->
			<div class="header-nav">
                <?php
                     $menuParameters = array(
                       'menu'  => 'Videos',
                       'container'       => false,
                       'echo'            => false,
                       'items_wrap'      => '%3$s',
                       'depth'           => 0,
                    );

                      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                ?>
			</div>

            <!--
            <?php $cdv_posts_cat = get_theme_mod('cdv_posts_cat');
        	if($cdv_posts_cat){
        	?>
        	<div >
        	<a href="<?php echo get_category_link($cdv_posts_cat) ?>"><?php echo get_cat_name($cdv_posts_cat) ?></a>
        	</div>
        	<?php } ?> -->
		</header>
