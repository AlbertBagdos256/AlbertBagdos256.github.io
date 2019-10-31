
<?php get_header() ?>
<body>
	<h1 style="color:#fff">hello</h1>
	<div id="page">
		
		<div id="body">
			<div class="header">
				<div>
					<h1>Projects</h1>
					<ul>
                        <?php if(have_posts()) : while(have_posts()) : the_post() ?>
						<li>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
							<div>
							 <h1><?php the_title() ?></h1>
								<?php the_excerpt() ?>
								<a href="<?php the_permalink() ?>" class="more">Read More</a>
							</div>
						</li>
<?php endwhile; ?>
<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
    <?php get_footer() ?>
    