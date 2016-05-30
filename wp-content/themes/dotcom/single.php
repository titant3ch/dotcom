<?php get_header(); ?>

<div id="post">

	<div id="leftContentPost">

		<section class="container" id="single">

			<h1><?php the_title(); ?></h1>
			<h4><?php the_time('F j, Y'); ?></h4>
			<hr>
			

			<?php while ( have_posts() ) : the_post() ?>
			<article>
			    <?php the_content(); ?>
			</article>
			
			<?php endwhile; ?>

			<!-- <a href="#0" class="cd-top">Top</a> -->

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

<?php get_footer(); ?>