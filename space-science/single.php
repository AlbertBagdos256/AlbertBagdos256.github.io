<?php get_header() ?>

<body>
    <div id="page">
    
        <div id="body">
            <div class="header">
                <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                        <div>
                            <h1><?php the_title() ?></h1>
                            <?php the_post_thumbnail() ?>
                            <h2><?php the_time('M j, Y') ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>
<?php endwhile; ?>
<?php endif; ?>
                </div>
                <?php get_footer() ?>