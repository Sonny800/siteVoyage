<?php get_header() ?>
<div class="container blocart">

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
            <?php the_post() ?>

            <article class="artc">
                <div class="tete">

                    <h1 class="titrearticleblog"><?php the_title() ?></h1>
                    <small class="auteur">
                        <a href="<?php the_author() ?>"><i class="fa fa-user-circle" aria-hidden="true"></i>  <?php the_author() ?></a>
                        <i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_date(); ?>
                        <?php the_category() ?>
                    </small>
                </div>
                <p><?php the_content() ?></p>


            </article>
        <?php endwhile ?>
    <?php endif ?>
</div>

<?php get_footer() ?>
