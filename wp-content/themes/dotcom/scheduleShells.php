<?php
/*
Template Name: Memorial Day
*/
?>

<?php get_header(); ?>

<section style="padding-top: 100px;">

	<?php while ( have_posts() ) : the_post() ?>
		<?php the_content(); ?>
		
		<?php endwhile; ?>
	
	<!-- Paste Template Below -->

<?php include ''; ?>


	<!-- End Template -->

</section>


<?php get_footer(); ?>
		