<?php get_header() ?>

<body>
	<div id="page">
	
		<div id="body">
			<div class="header">
				<div>
					<h1>Blog</h1>
					<div class="article">
						<ul>
						<?php 
								$posts = get_posts( array(
									'numberposts' => 2,
									'post_type' => 'post',
								));
								foreach ($posts as $post) {
									setup_postdata($post);
									?>
							<li>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
								<h1><?php the_title() ?></h1>
								<span><?php the_time() ?></span>
								<?php the_excerpt() ?>
								<a href="<?php the_permalink() ?>" class="more">Read More</a>
							</li>
							<?php
								}
									
								wp_reset_postdata()
								?>
						</ul>
					</div>
					<div class="sidebar">
						<ul>
							<li>
								<h1>FEATURED POSTS</h1>
								<a href="singlepost.html"><img src="images/moon-satellite.jpg" alt=""></a>
								<h2>SOYUZ TMA-M</h2>
								<span>FEBRUARY 6, 2023</span>
							</li>
							<li>
							
								<?php dynamic_sidebar('right_sidebar') ?>
							</li>
						</ul>
						
						
						<style>
							.tagcloud {
								width: 340px !important;
							}
						.sidebar ul li a {
							display: initial !important;	
										
						}
						#body .header div ul {
							display: inherit !important;
						}
					#gallery-1	.gallery .galleryid-148 .gallery-columns-3 .gallery-size-thumbnail {
						display: none !important;
					}
						</style>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer() ?>