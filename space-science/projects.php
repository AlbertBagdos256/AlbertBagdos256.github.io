<?php 
/* 
Template Name: Project
*/
?>
<?php get_header() ?>
<body>
	<div id="page">
		
		<div id="body">
			<div class="header">
				<div>
					<h1>Projects</h1>
					<ul>
                    <?php 
								$posts = get_posts( array(
									'numberposts' => 5,
									'post_type' => 'post',
								));
								foreach ($posts as $post) {
									setup_postdata($post);
									?>
								
							<li>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
							<div>
								<h1><?php the_title() ?> </h1>
						<?php the_excerpt() ?>
								<a href="<?php the_permalink() ?>" class="more">Read More</a>
							</div>
						</li>
									<?php
								}
								
								wp_reset_postdata()
								?>
								
						
						
					</ul>
				</div>
			</div>
		</div>
	<?php get_footer() ?>