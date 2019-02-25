<?php
/*
* Template Name: Pays
*/

 ?>
 <?php get_header() ?>
<div class="wrapperarchivepays">
    <h1 class="titlearchivepays">Afrique</h1>

    <?php $args_query_afrique = [
      'post_type' => 'pays',
      'category_name' => 'afrique',
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC'
    ];
    $query_afrique = new WP_query($args_query_afrique) ?>
    <?php if ($query_afrique->have_posts()): ?>
        <?php while ($query_afrique->have_posts()): ?>
            <?php $query_afrique->the_post() ?>
    <div class="archivepays">
        <div class="archivecard">
            <a href="<?php the_permalink() ?>" class="archivelink"><?php the_title() ?></a>
            <p class="archiveinfo"><?php the_field('capital') ?> - <?php the_field('monnaie') ?></p>

        </div>

    </div>
    <?php endwhile ?>
<?php endif ?>

<h1 class="titlearchivepays">Amerique</h1>

<?php $args_query_amerique = [
  'post_type' => 'pays',
  'category_name' => 'amerique',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
];
$query_amerique = new WP_query($args_query_amerique) ?>
<?php if ($query_amerique->have_posts()): ?>
    <?php while ($query_amerique->have_posts()): ?>
        <?php $query_amerique->the_post() ?>
<div class="archivepays">
    <div class="archivecard">
        <a href="<?php the_permalink() ?>" class="archivelink"><?php the_title() ?></a>
        <p class="archiveinfo"><?php the_field('capital') ?> - <?php the_field('monnaie') ?></p>

    </div>

</div>
<?php endwhile ?>
<?php endif ?>

<h1 class="titlearchivepays">Asie</h1>

<?php $args_query_asie = [
  'post_type' => 'pays',
  'category_name' => 'asie',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
];
$query_asie = new WP_query($args_query_asie) ?>
<?php if ($query_asie->have_posts()): ?>
    <?php while ($query_asie->have_posts()): ?>
        <?php $query_asie->the_post() ?>
<div class="archivepays">
    <div class="archivecard">
        <a href="<?php the_permalink() ?>" class="archivelink"><?php the_title() ?></a>
        <p class="archiveinfo"><?php the_field('capital') ?> - <?php the_field('monnaie') ?></p>

    </div>

</div>
<?php endwhile ?>
<?php endif ?>


<h1 class="titlearchivepays">Europe</h1>

<?php $args_query_europe = [
  'post_type' => 'pays',
  'category_name' => 'europe',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
];
$query_europe = new WP_query($args_query_europe) ?>
<?php if ($query_europe->have_posts()): ?>
    <?php while ($query_europe->have_posts()): ?>
        <?php $query_europe->the_post() ?>
<div class="archivepays">
    <div class="archivecard">
        <a href="<?php the_permalink() ?>" class="archivelink"><?php the_title() ?></a>
        <p class="archiveinfo"><?php the_field('capital') ?> - <?php the_field('monnaie') ?></p>

    </div>

</div>
<?php endwhile ?>
<?php endif ?>


<h1 class="titlearchivepays">Océanie</h1>

<?php $args_query_oceanie = [
  'post_type' => 'pays',
  'category_name' => 'oceanie',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
];
$query_oceanie = new WP_query($args_query_oceanie) ?>
<?php if ($query_oceanie->have_posts()): ?>
    <?php while ($query_oceanie->have_posts()): ?>
        <?php $query_oceanie->the_post() ?>
<div class="archivepays">
    <div class="archivecard">
        <a href="<?php the_permalink() ?>" class="archivelink"><?php the_title() ?></a>
        <p class="archiveinfo"><?php the_field('capital') ?> - <?php the_field('monnaie') ?></p>

    </div>

</div>
<?php endwhile ?>
<?php endif ?>



</div>
<?php get_footer() ?>
