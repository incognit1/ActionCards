<? get_header();?>

	<section class="about_s" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><?php the_field('title1');?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img class="wow fadeInLeft" src="<?php bloginfo('template_directory'); ?>//img/about.jpg" alt="О проекте">
				</div>
				<div class="col-md-6">
					<p class="wow fadeInRight">
						<?php the_field('desc');?>
					</p>
				</div>
			</div>
		</div>
	</section>


	<section class="param_s" id="partners">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><?php the_field('title2');?></h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="fadeInUp wow params_block">
						<div class="params_img">
							<img src="<?php bloginfo('template_directory'); ?>/img/p1.png" alt="">
						</div>
						<h4><?php the_field('partner1_title');?></h4>
						<p><?php the_field('partner1_desc');?></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="fadeInUp wow params_block" data-wow-delay="0.5s">
						<div class="params_img">
							<img src="<?php bloginfo('template_directory'); ?>//img/p2.png" alt="">
						</div>
						<h4><?php the_field('partner2_title');?></h4>
						<p><?php the_field('partner2_desc');?></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<div class="fadeInUp wow params_block" data-wow-delay="1.0s">
						<div class="params_img">
							<img src="<?php bloginfo('template_directory'); ?>//img/p3.png" alt="">
						</div>
						<h4><?php the_field('partner3_title');?></h4>
						<p><?php the_field('partner3_desc');?> </p>
					</div>
				</div>

			</div>
		</div>

	</section>


	
<?php 
$v = get_field('show_gallery');

if ($v  == 1): ?>

<section class="gallery_s" id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><?php the_field('title3');?></h3>
				</div>
			</div>
			<div class="row">

				<div class="grid">
					<div class="gallery_img">
						<img class="wow fadeInLeft" src="<?php bloginfo('template_directory'); ?>//img/gallery1.jpg" alt="">
					</div>

					<div class="block dark">
						<span><?php the_field('gallery_block1_span');?></span>
						<p><?php the_field('gallery_block1_p');?></p>
					</div>
					<div class="gallery_img">
						<img class="wow fadeInRight" src="<?php bloginfo('template_directory'); ?>//img/gallery1.jpg" alt="">
					</div>



					<div class="block yellow">
						<span><?php the_field('gallery_block2_span');?></span>
						<p><?php the_field('gallery_block2_p');?></p>
					</div>
					<div class="gallery_img">
						<img class="wow fadeInUp" src="<?php bloginfo('template_directory'); ?>//img/gallery1.jpg" alt="">
					</div>
					<div class="block light">
						<span><?php the_field('gallery_block3_span');?></span>
						<p><?php the_field('gallery_block3_p');?></p>
					</div>
				</div>
			</div>

		</div>
	</section>

<?php
endif;
?>
	
	
<?php 
$t = get_field('show_testimonials');

if ($t  == 1): ?>

	<section class="testimonials_s" id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><?php the_field('title4');?></h3>
				</div>
			</div>
			<div class="row">
				<?php echo do_shortcode( '[wcp-carousel id="39"]' ); ?>
			</div>
		</div>
	</section>
<?php
endif;
?>
<? get_footer();?>