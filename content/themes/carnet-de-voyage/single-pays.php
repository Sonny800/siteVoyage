<?php get_header() ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : ?>
<?php the_post() ?>
<div class="archivecard archivesinglepayscard">

	<h3 class="titrearticleblog"><?php the_title() ?></h3>
	<p class="resumearticleblog"><?php the_field('capital') ?></p>
	<p class="resumearticleblog"><?php the_field('monnaie') ?></p>

</div>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>
