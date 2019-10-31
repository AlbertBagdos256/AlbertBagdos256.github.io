<?php 
/* 
Template Name: Contact
*/
?>
<?php get_header() ?>
<body>
	<div id="page">
		
		<div id="body">
			<div class="header">
				<div class="contact">
					<h1>Contact</h1>
					<h2>DO NOT HESITATE TO CONTACT US</h2>
					<form action="index.html">
						<input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Email Address" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="message" cols="50" rows="7">Message</textarea>
						<input type="submit" value="Send" id="submit">
					</form>
				</div>
			</div>
		</div>
		<?php get_footer() ?>