<?php get_header(); ?>

<div id="post">

		<section class="container" id="single">

			<h1><?php the_title(); ?></h1>
			<h4><?php the_time('F j, Y'); ?></h4>
			<hr>
			

			<?php while ( have_posts() ) : the_post() ?>
			<article>
			    <?php the_content(); ?>
			</article>
			
			<?php endwhile; ?>

		</section>

		<section  class="container" id="single">
			<?php comments_template(); ?>
		</section>

</div>

<?php get_footer(); ?>