<?php 
/* 
Template Name: about
*/
?>
<?php get_header() ?>
<body>
	<div id="page">
	
		<div id="body" class="about">
			<div class="header">
				<div>
					<h1>About</h1>
					<h2>We Have Free Templates for Everyone</h2>
					<p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="https://freewebsitetemplates.com/about/terms/">Terms of Use</a>. You can even remove all our links if you want to.</p>
                </div>
                
            </div>
            <?php 
								$posts = get_posts( array(
									'numberposts' => 1,
									'post_type' => 'post',
								));
								foreach ($posts as $post) {
									setup_postdata($post);
									?>
										
			<div class="body">
				<div>
					<?php the_post_thumbnail() ?>
					<h2><?php the_title() ?></h2>
					<?php the_excerpt() ?>
				</div>
			</div>
			<div class="footer">
			<div>
					<?php the_post_thumbnail() ?>
					<h2><?php the_title() ?></h2>
					<?php the_excerpt() ?>
				</div>
			</div>
			
									<?php
								}
								
								wp_reset_postdata()
                                ?>
                                	<div class="section">
				<div>
					<h2>Template Details</h2>
					<p>Design Version 1. Code version 3. Website Template details, discussion and updates for this <a href="https://freewebsitetemplates.com/discuss/spacescience/"> Space Science Website Template</a>. Website Template design by <a href="https://freewebsitetemplates.com/">Free Website Templates</a>. Please feel free to remove some or all the text and links of this page and replace it with your own About content.</p>
				</div>
			</div>

			
		</div>
	<?php get_footer() ?>