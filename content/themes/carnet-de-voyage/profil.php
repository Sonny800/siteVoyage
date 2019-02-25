<?php
/*
* Template Name: Profil
*/

 ?>
<?php get_header() ?>
<div class="wrapperprofile">
    <h2 class="inscriptiontitle">Mon profil</h2>

    <h3 class="mesderniersarticles">Mes derniers articles : </h3>


    <!-- RECUPERER L'UTILISATEUR COURANT + REQUETE POUR RECUPERER LES POSTS -->
    <?php if ( is_user_logged_in() ):

        global $current_user;
        wp_get_current_user();
        $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
        $author_posts = new WP_Query($author_query);
        while($author_posts->have_posts()) : $author_posts->the_post();
        ?>


            <a href="<?php the_permalink() ?>"><h4 class="mesderniersarticlestitle"><?php the_title() ?></h4></a>






        <?php
    endwhile;

    else :

        echo "not logged in";

    endif; ?>

    <ul class="profilelinks">
        <li><a href="<?php echo get_permalink(get_page_by_path('gestion-du-profile')) ?>"> Modifier mes infos</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('creer-un-article')) ?>"> Créer un article</a></li>
    </ul>

</div>



<?php get_footer() ?>
