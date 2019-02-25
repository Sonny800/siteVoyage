<?php get_header() ?>
<div class="wrapperblog">
    <h2 class="titleblog">Le dernier article posté par catégorie</h2>

    <?php

    // Récupération des catégories pour les liens.. (je sens que je peux mieux faire..)
        $category_afrique = get_cat_ID( 'Afrique' );
        $category_linkafrique = get_category_link( $category_afrique );

        $category_europe = get_cat_ID( 'Europe' );
        $category_linkeurope = get_category_link( $category_europe );

        $category_amerique = get_cat_ID( 'Amerique' );
        $category_linkamerique = get_category_link( $category_amerique );

        $category_asie = get_cat_ID( 'Asie' );
        $category_linkasie = get_category_link( $category_asie );

        $category_oceanie = get_cat_ID( 'Océanie' );
        $category_linkoceanie = get_category_link( $category_oceanie );
    ?>
    <!-- *********** AFRIQUE ************* -->
    <?php
    $args_query_afrique = [
        'posts_per_page' => 1,
        'category_name' => 'afrique',
];
$query_afrique = new WP_Query($args_query_afrique);
?>



<?php if($query_afrique->have_posts()): ?>
    <?php while($query_afrique->have_posts()): ?>
        <?php $query_afrique->the_post() ?>
    <div class="continentblog"  style="background-image:url(<?php the_post_thumbnail_url() ?>)">


        <a href="<?php echo esc_url( $category_linkafrique )?>" class="liencontinentblog"><h1 class="titrecontinentblog">Afrique</h1></a>
        <h3 class="titrearticleblog"><?php the_title() ?></h3>
        <p class="resumearticleblog"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink()?>" class="lienarticleblog">Lire la suite...</a>
    <?php endwhile ?>
<?php endif ?>
    </div>



    <!-- *********** AMERIQUE ************* -->
    <?php
    $args_query_amerique = [
        'posts_per_page' => 1,
        'category_name' => 'amerique',
];
$query_amerique = new WP_Query($args_query_amerique);
?>
<?php if($query_amerique->have_posts()): ?>
    <?php while($query_amerique->have_posts()): ?>
        <?php $query_amerique->the_post() ?>
    <div class="continentblog"  style="background-image:url(<?php the_post_thumbnail_url() ?>)">
        <a href="<?php echo esc_url( $category_linkamerique )?>" class="liencontinentblog"><h1 class="titrecontinentblog">Amérique</h1></a>
        <h3 class="titrearticleblog"><?php the_title() ?></h3>
        <p class="resumearticleblog"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="lienarticleblog">Lire la suite...</a>
      <?php endwhile ?>
  <?php endif ?>
    </div>



    <!-- *********** ASIE ************* -->
    <?php
    $args_query_asie = [
        'posts_per_page' => 1,
        'category_name' => 'asie',
        'orderby' => 'date',
];
$query_asie = new WP_Query($args_query_asie);
?>
<?php if($query_asie->have_posts()): ?>
    <?php while($query_asie->have_posts()): ?>
        <?php $query_asie->the_post() ?>
    <div class="continentblog"  style="background-image:url(<?php the_post_thumbnail_url() ?>)">
        <a href="<?php echo esc_url( $category_linkasie )?>" class="liencontinentblog"><h1 class="titrecontinentblog">Asie</h1></a>
        <h3 class="titrearticleblog"><?php the_title() ?></h3>
        <p class="resumearticleblog"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="lienarticleblog">Lire la suite...</a>
      <?php endwhile ?>
  <?php endif ?>
    </div>



    <!-- *********** EUROPE ************* -->
    <?php
    $args_query_europe = [
        'posts_per_page' => 1,
        'category_name' => 'europe',
        'orderby' => 'date',
];
$query_europe = new WP_Query($args_query_europe);
?>
<?php if($query_europe->have_posts()): ?>
    <?php while($query_europe->have_posts()): ?>
        <?php $query_europe->the_post() ?>
    <div class="continentblog"  style="background-image:url(<?php the_post_thumbnail_url() ?>)">
        <a href="<?php echo esc_url( $category_linkeurope )?>" class="liencontinentblog"><h1 class="titrecontinentblog">Europe</h1></a>
        <h3 class="titrearticleblog"><?php the_title() ?></h3>
        <p class="resumearticleblog"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="lienarticleblog">Lire la suite...</a>
      <?php endwhile ?>
  <?php endif ?>
    </div>



    <!-- *********** OCEANIE ************* -->
    <?php
    $args_query_oceanie = [
        'posts_per_page' => 1,
        'category_name' => 'oceanie',
        'orderby' => 'date',
];
$query_oceanie = new WP_Query($args_query_oceanie);
?>
<?php if($query_oceanie->have_posts()): ?>
    <?php while($query_oceanie->have_posts()): ?>
        <?php $query_oceanie->the_post() ?>
    <div class="continentblog"  style="background-image:url(<?php the_post_thumbnail_url() ?>)">
        <a href="<?php echo esc_url( $category_linkoceanie )?>" class="liencontinentblog"><h1 class="titrecontinentblog">Océanie</h1></a>
        <h3 class="titrearticleblog"><?php the_title() ?></h3>
        <p class="resumearticleblog"><?php the_excerpt() ?></p>
        <a href="<?php the_permalink() ?>" class="lienarticleblog">Lire la suite...</a>
      <?php endwhile ?>
  <?php endif ?>
    </div>

</div>
<?php get_footer() ?>
