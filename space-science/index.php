<?php get_header(); ?>

		 

<body>


	<div id="page">
		
		<div id="body" class="home">
			<div class="header">
				<div>
		
				
					<h1>SOYUZ TMA-M</h1>
					<h2>SPACECRAFT</h2>
					<a href="blog.html" class="more">Read More</a>
					<h3>FEATURED PROJECTS</h3>
					<ul>
					<?php 
								$posts = get_posts( array(
									'numberposts' => 4,
									'post_type' => 'post',
								));
								foreach ($posts as $post) {
									setup_postdata($post);
									?>
									<li>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
						</li>
									<?php
								}
								
								wp_reset_postdata()
								?>
						
					
					</ul>
				</div>
			</div>
			<div class="body">
				<?php dynamic_sidebar("index_sidebar") ?>
		
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
						<?php 
								$posts = get_posts( array(
									'numberposts' => 1,
									'post_type' => 'post',
								));
								foreach ($posts as $post) {
									setup_postdata($post);
									?>
								
							<h1><?php the_title() ?></h1>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?><span></span></a>
									<?php
								}
								
								wp_reset_postdata()
								?>
								
						
						</li>
						<li>
							<h1>LATEST BLOG</h1>
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
									<span><?php the_time('M j, Y') ?></span>
									<a href="<?php the_permalink() ?>" class="more">Read More</a>
								</li>
								
						
									<?php
								}
								
								wp_reset_postdata()
								?>
								
								<style>
						#body.home .footer div ul li ul li a img {
						    height: 60px !important;
								
						}
								
						.gallery .galleryid-148 .gallery-columns-3 .gallery-size-thumbnail{
								display: none !important;
								opacity: 0 !important;
							}	
					
								</style>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>