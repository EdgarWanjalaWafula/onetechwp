<?php 
/* 
	Template Name: Home
	Author: Edgar Wanjala Wafula
	Author URL: www.430.com
*/
get_header();
?>	
	<!-- Banner  -->
	<div class="banner">
		<div class="banner_background" style="background: url('<?php echo wp_get_attachment_url(90); ?>');"></div>
		<div class="owl-carousel owl-theme landingslider">
		<?php 
			$items = array(
				'post_type' 	=> 	'product',
				'product_cat'	=>	'audio-devices'
			);

			$loop = new WP_QUERY($items); 

			while($loop->have_posts()) : $loop->the_post(); 
				?>
					<div class="owl-item">
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
								<div class="col-lg-5 offset-lg-4 fill_height">
									<div class="banner_content">
										<h1 class="banner_text">Offer Item</h1>
										<div class="banner_price">
											<!-- Offer Price -->
											<span>$530</span>
											<!-- Real Price -->
											<?php echo $product->get_price_html(); ?>
										</div>
										<div class="banner_product_name"><?php the_title(); ?></div>
										<div class="button banner_button"><a href="<?php the_permalink($post->ID);  ?>">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php 
			endwhile; 
		?>
	</div>
	</div>

	<!-- Characteristics -->
	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->
					<div class="deals">
						<div class="deals_title">Deals of the Week</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								<?php

								// Setup your custom query
								$args = array( 'post_type' => 'product');
								$loop = new WP_Query( $args );
								// var_dump($product);

								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="owl-item deals_item">
									<div class="deals_image">
										<?php echo $product->get_image(); ?>
									</div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category">
												<a href="#">
													Category
												</a>
											</div>
											<div class="deals_item_price_a ml-auto"></div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><?php the_title(); ?></div>
											<div class="deals_item_price ml-auto"><?php echo $product->get_price_html(); ?></div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>28</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>secs</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

									<?php 
								endwhile; wp_reset_query(); // Remember to reset ?>
							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
					
					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									<li>Best Rated</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product Panel: Featured Products-->
							<div class="product_panel panel active">
									<?php do_shortcode('[showproducts]'); ?>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel: On Sale -->
							<div class="product_panel panel">
								<div class="featured_slider slider">

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular Categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Popular Categories</div>
						<div class="popular_categories_slider_nav">
							<div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
						<div class="popular_categories_link"><a href="#">full catalog</a></div>
					</div>
				</div>
				
				<!-- Popular Categories Slider -->
				<div class="col-lg-9">
					<div class="popular_categories_slider_container">
						<div class="owl-carousel owl-theme popular_categories_slider">

							<?php 
							$cats = get_terms('product_cat'); 
							// $link = get_term_link($cats,'product_cat'); 

							 // var_dump($link); 
						
							// var_dump($cats); 

							foreach ($cats as $cat) {
									
								?>
									<!-- Popular Categories Item -->
									<div class="owl-item">
										<div class="popular_category d-flex flex-column align-items-center justify-content-center">
											<div class="popular_category_image"><img src="images/popular_1.png" alt=""></div>
											<div class="popular_category_text"><?php echo $cat->name;?></div>
											<a href="product-category/<?php echo $cat->slug; ?>">Add to Cart</a>
										</div>
									</div>
								<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(<?php echo wp_get_attachment_url(162); ?>)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			
			<!-- Banner 2 Slider -->
			<div class="owl-carousel owl-theme banner_2_slider">
				<?php 
					$args = array(
						'post_type' 	=> 	'product',
						'product_cat'	=> 	'computer', 
						'posts_per_page'=>	6
					);

					$i = 0; 

					$loop = new WP_Query($args); 

					// var_dump($loop); 

					while($loop->have_posts()) : $loop->the_post(); 
						?>
							
							<!-- Banner 2 Slider Item -->
							<div class="owl-item" id="banner-<?php echo $i++; ?>">
								<div class="banner_2_item">
									<div class="container fill_height">
										<div class="row fill_height">
											<div class="col-lg-4 col-md-6 fill_height">
												<div class="banner_2_content">
													<div class="banner_2_category">Laptops</div>
													<div class="banner_2_title text-capitalize"><?php echo the_title(); ?></div>
													<div class="banner_2_text">
														<?php wp_trim_words(get_the_content(), '5'); ?>
													</div>
													<div class="rating_r rating_r_4 banner_2_rating">
														<i></i><i></i><i></i><i></i><i></i></div>
													<div class="button banner_2_button"><a href="<?php echo get_permalink($loop->post->ID); ?>">Explore</a></div>
												</div>
												
											</div>
											<div class="col-lg-8 col-md-6 fill_height">
												<div class="banner_2_image_container">
													<div class="banner_2_image">
														<?php echo $product->get_image(); ?>
													</div>
												</div>
											</div>
										</div>
									</div>			
								</div>
							</div>
						<?php 
					endwhile; 
					wp_reset_query(); 
				?>
			</div>
		</div>
	</div>
<?php 
get_footer(); 