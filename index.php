<!doctype html>

<!-- HTML file about me -->
<html lang="en">

<head>
    <Title>
        Yash Sinha - Synopsis
    </Title>
    <meta charset="UTF-8">
	<meta name="author" content="Yash Sinha">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="aboutme/aboutme.css">
	<link rel="stylesheet" href="index.css">
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
    
		
		<header> 
			<h1 class="heading"> Yash Sinha's Website </h1> 
		
		</header>
        
      
		<?php
		 $path = "index.php";
		 include 'templateHeader.php'
		 ?>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        
       <section>
		   <h2 class="what"> What is this Website? </h2>
		<p>
			Welcome to my website. Here you will find pages about who I am, and four different basic websites I've created with the basic CSS tools. 
			Here is a random image of space because space is interesting. 
			
			<br>
			This website was also a project to learn about the basics of full-stack development using HTML5, CSS3, 
			JavaScript, PHP, and MySQL. I have also utilized the JavaScript library called jQuery, and used the web technique called
			AJAX.
			
			<br>
			I have also created a section where it is a mock version of an e-commerce site where 
			you can buy movies.
			<br>

			Note: Again the e-commerce is just a mock version. You can't actually buy movies in dvd form.  

		</p>

	</section>

	<br>

	<div id="random">
		
		<img src="images/spacebackground.jpg" alt="Space Background">
	</div>

	<br>
	<br>
	<br>

		
	<?php 
		date_default_timezone_set("America/Denver");
		$uDate = date("m/d/y h:ia", filemtime('index.php'));
		
		date_default_timezone_set("America/Denver");
		echo ' <p style="font-size: 15pt;"> This page was last updated '  . $uDate . '</p>';

		echo '<img src="images/htmlvalidatorbadge.jpg" alt="Badge for HTML Validation" height="32">
            <img src="images/cssvalidationbadge.jpg" alt="Badge for CSS Validation">
            <img src="images/wcagvalidationbadge.jpg" alt="Badge for WCAG Validation">

		';
	?>

    </body>



</html>