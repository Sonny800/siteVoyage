<?php
/*
Template Name: Deconnexion Page
*/
?>
<?php get_header() ?>
<div class="wrapperinscription">
    <h1 class="inscriptiontitle">Inscription</h1>
    <?php if(have_posts()) :?>
        <?php while(have_posts()) :?>
            <?php the_post()?>
            <p><?php the_content() ?></p>
        <?php endwhile ?>
    <?php endif ?>

</div>

<?php get_footer() ?>
