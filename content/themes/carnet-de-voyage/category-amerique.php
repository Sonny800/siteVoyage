<?php get_header() ?>

<section id="cdv-posts">

<div class="row">
    <div class="col-sm-12">
        <div class="posts">
        <?php $cdv_posts_cat_am = get_theme_mod('cdv_posts_cat_am'); ?>
			<?php
			if($cdv_posts_cat_am){
			$count = 1;
			$args = array( 'cat' => $cdv_posts_cat_am, 'posts_per_page' => get_theme_mod('cdv_posts_num_am') );
			$query = new WP_Query($args);
			if($query->have_posts()):
				while($query->have_posts()) : $query->the_post();
				$category = get_the_category();

			?>
			<article <?php echo post_class() ?> style="background-image:url(<?php the_post_thumbnail_url() ?>);">

			<div class="post__content">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt() ?>
			<a class="btn btn-default" href="<?php echo esc_url(get_permalink()); ?>">Lire la suite</a>

			</div>

			</article>
			<?php
			endwhile;
			endif;
			wp_reset_postdata();
			}
			?>
		</div>
		<?php
		?>
        </div>
    </div>
</div>

</section>

<?php get_footer() ?>
