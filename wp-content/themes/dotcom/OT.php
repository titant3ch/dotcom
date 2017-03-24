<?php
/*
Template Name: Over Time
*/
?>

<?php get_header(); ?>

<div id="post">

	<div id="leftContentPost">

		<section class="container" id="single">

			<h1><?php the_title(); ?></h1>
			<!-- <h4><?php the_time('F j, Y'); ?></h4> -->
			<hr>
			

			<?php while ( have_posts() ) : the_post() ?>
			<article>
			    <?php the_content(); ?>
			</article>
			
			<?php endwhile; ?>

			<!-- Added form for OT request -->
			<?php require "inc/OT_request.php"; ?>

		</section>

	</div>

	<div id="rightContent">
		<form name="myForm" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		  <div>
		    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search" autocomplete="off" />
		  </div>
		</form>
		<h2>Quick Links</h2>
		<hr>
		<?php 

			$defaults = array(
				'menu'            => 'links',
				'container'       => 'false',
				'items_wrap'      => '<ul>%3$s</ul>'
			);

			wp_nav_menu( $defaults ); 

		?>
	</div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
...
<!-- Include jQuery - see http://jquery.com -->
<script type="text/javascript">
    $('.DB_Cleanload').on('click', function () {
        return confirm('Are you sure you want to clear all records in OT_Request database?');
    });
</script>

<?php get_footer(); ?>