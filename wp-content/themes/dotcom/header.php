<!DOCTYPE html>
<html class="no-js">
<head>
<!--[if IE]>
<link rel="stylesheet" href="http://192.168.88.250/dotcom/wp-content/themes/dotcom/css/ie-only.css" type="text/css" />
<h1>This page is only availabe using IE 10 or Chrome</h1>

<![endif]-->
    
        <title><?php bloginfo( 'description' ); ?></title>
        
        <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/img/fx-favicon.ico">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/realTime.js"></script>
		<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")})(document,window,0);</script>

        <meta charset="UTF-8">
        <!-- <meta http-equiv="refresh" content="2" > -->
 
    </head>
<body>

<header>

	<div id="header">

		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>

		<nav>
			<?php 

				$defaults = array(
					'menu'            => 'main',
					'container'       => 'false',
					'items_wrap'      => '<ul>%3$s</ul>'
				);

				wp_nav_menu( $defaults ); 

			?>
		</nav>

	</div>
	
</header><!-- /header -->