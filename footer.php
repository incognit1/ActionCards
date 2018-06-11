	<footer class="footer" id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<span class="footer_logo"><?php the_field('title_block_h1');?></span>
					<p>
						<i class="far fa-envelope"></i> <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></p>
					<p>
						
						<i class="fas fa-phone-volume"></i>
						<a href="tel:<?php the_field('number');?>">+<?php the_field('number');?></a>
					</p>
				</div>
				<div class="col-md-3 col-sm-6">
					<ul>
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
				<div class="col-md-5  col-sm-12">
					<h4 class="shake wow" data-wow-delay="0.8s">Заказать звонок</h4>
					<div>
						<?php echo do_shortcode( '[contact-form-7 id="45" title="Перезвоните мне"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<? wp_footer();?>
</body>
</html>