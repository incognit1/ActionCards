<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Action Cards</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<? wp_head();?>
	
	<script>new WOW().init();</script>

</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div id="particles-js"></div>
			</div>
		</div>
		<nav>
			<div class="container">
				<div class="row">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed menu_btn " data-toggle="collapse" data-target="#top_menu">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						<a href="index.html" class="navbar-brand logo">
							<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo">
						</a>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="top_menu">
						<ul class="menu">
							<li>
								<a data-scroll href="#about"><?php the_field('title1');?></a>
							</li>
							<li>
								<a data-scroll href="#partners"><?php the_field('title2');?></a>
							</li>
							<li>
								<a data-scroll href="#gallery"><?php the_field('title3');?></a>
							</li>
							<li>
								<a data-scroll href="#testimonials"><?php the_field('title4');?></a>
							</li>
							<li>
								<a data-scroll href="#contacts"><?php the_field('title5');?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<div class="container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title_block">
						<h1 class="zoomIn animated"> 
						<?php the_field('title_block_h1');?></h1>
						<p class="slideInRight  animated"><?php the_field('title_block_p');?></p>
					</div>
				</div>
			</div>
		</div>
	</header>