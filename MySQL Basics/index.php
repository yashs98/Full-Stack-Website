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
        <img src="images/CSM_logo.png" style="width:150px;height:150px;" alt="Colorado School of Mines logo">  
		
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
		
		include 'templateFooter.php';
	?>

    </body>



</html>