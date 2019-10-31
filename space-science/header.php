
<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>blog - Space Science Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<?php wp_head() ?>
</head>
<div id="header">
			<div>
				<?php the_custom_logo(); ?>

				<?php wp_nav_menu([
					'theme_location' => 'top',
					'container' => false,
					'menu_id' => 'navigation',
				]); 
				
				?>
				<style>
				 #header {
					 background: black !important;
					 
				 }
				</style>
			</div>
		</div>
