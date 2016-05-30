<?php get_header(); ?>

<?php 
	query_posts('category_name=Important&showposts=1'); 
	while (have_posts()) : the_post(); 
?>

<?php

if ( $_SERVER['REQUEST_URI'] == '/dotcom/' ) {

	echo '<section id="important"><h3><a href="';
	echo get_permalink($post->post_parent);
	echo '">';
	echo the_title();
	echo '</a></h3>';
	// echo '<h4>';
	// echo the_time('F j, Y');
	echo '<hr><p>';
	echo the_excerpt();
	echo '</p></section>';
    
    }
?>

<?php endwhile; wp_reset_query(); ?>

<div id="main">

	<div id="leftContent">
	
		<?php while ( have_posts() ) : the_post() ?>

		<article>
			<?php 
				// check if post has a Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					echo '<div class="thumbnail"><a href="' . get_permalink($post->post_parent) . '"><p>';
					the_post_thumbnail();
					echo '</a></p></div>';
				}else {
					echo '';
				}
			?>
			
			<div class="content">
				<h3>
					<a href="<?php echo get_permalink($post->post_parent) ?>"><?php the_title(); ?></a>
				</h3>
				<h4><?php the_time('F j, Y'); ?></h4>
				<hr>
			    <?php the_excerpt(); ?>
			    <div id="author">
				   <img src="<?php echo get_template_directory_uri(); ?>/img/author_icon.png" />
				   <p><?php the_author(); ?></p>
			   </div>
			</div>
		</article>

		<?php endwhile; ?>

		<section id="paged">
			<p>
				<?php
					//display Page x of y pages
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					echo 'Page ' . $paged . ' of ' . $wp_query->max_num_pages;
				?>
			</p>

				<?php next_posts_link('<img src="' . get_template_directory_uri(). '/img/next.png" />'); ?>
				<?php previous_posts_link('<img src="' . get_template_directory_uri(). '/img/prev.png" />'); ?>
				
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
