<section id="ori-blog-details" class="ori-blog-details-section position-relative">
	<div class="container">
		<div class="ori-blog-details-content">
			<div class="row">
				<div class="col-lg-12">
					<div class="ori-blog-details-text-wrapper">

						<div class="ori-recent-portfolio-area">
							<h3>Скупаем золото</h3>



							<div class="ori-recent-portfolio-item-area">
								<div class="row">


									<?php $catquery = new WP_Query('cat=3&posts_per_page=7'); ?>


									<?php while ($catquery->have_posts()) : $catquery->the_post(); ?>
										<div class="col-md-3">
											<div class="ori-portfolio-item position-relative">
												<div class="portfolio-img">
													<?php the_post_thumbnail('post_thumb1') ?>
												</div>
												<div class="portfolio-text">
													<span class="port-category text-uppercase"><a href="blog.html">Gold-RF</a></span>
													<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
												</div>
											</div>
										</div>
									<?php endwhile; ?>


								</div>
							</div>
						</div>



					</div>
				</div>

			</div>

		</div>
	</div>


	<?php
	get_template_part('actual_info');
	?>

	<?php
	get_template_part('subscribe_telegram');
	?>





	<div class="line_animation">
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
	</div>
</section>