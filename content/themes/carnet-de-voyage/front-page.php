<?php get_header(); ?>

<main class="maincontent">
    <!-- **************** SLIDER ******************* -->

<section id="cdv-home-carousel">
<div class="carousel slide" id="home-carousel" data-ride="carousel" data-interval="<?php echo get_theme_mod('cdv_home_carousel_interval') ?>">

<div class="carousel-inner" role="listbox">

<?php
  $first_active = true;
 for ($i=1; $i < 4; $i++) {
  $home_carousel_page_id = get_theme_mod( 'cdv_home_carousel_page'.$i );
  if ($home_carousel_page_id) {
    $classes = 'item';
    if ($first_active) {
      $classes = 'item active';
      $first_active = false;
    }
    $query = new WP_Query(['page_id' => absint($home_carousel_page_id)]);

    if( $query->have_posts() ):
            while($query->have_posts()) : $query->the_post(); ?>
      <?php

      $carousel_image = '';
      if(has_post_thumbnail()){
        $carousel_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
        //echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($carousel_image[0]).'">';
      } ?>

      <div class="<?php echo $classes ?>" <?php echo ($carousel_image) ? 'style="background-image:url('.esc_url($carousel_image[0]).');"`' : ''?>>
        <div class="carousel-caption">
          <h3><?php echo esc_html(get_the_title()); ?></h3>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary">Accéder à la page</a>
        </div>
      </div>

      <?php
      wp_reset_postdata();
      endwhile;
    endif;
  }
}
?>
</div>


<!-- Controls -->
<a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
<span class="icon-prev fa fa-arrow-left " aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
<span class="icon-next fa fa-arrow-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

</section>



            <!-- *************** NAV CONTINENT **************** -->

            <div class="nav-continent">
              <ul class="navlist-continent">
                  <li><?php wp_nav_menu([
                    'menu_class' => '',
                    'container' => false,
                    'theme_location' => 'primary'
                ]); ?></li>

              </ul>
            </div>

            <!-- ***************** WORLD MAP ******************** -->

            <div class="worldmap">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post() ?>
                        <p><?php the_content() ?></p>
                    <?php endwhile ?>
                <?php endif ?>
            </div>
</main>

<?php get_footer(); ?>
