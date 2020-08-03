<!doctype html>

<html lang="en">

<head>
    <Title>
        Yash Sinha - Synopsis
    </Title>
    <meta charset="UTF-8">
	<meta name="author" content="Yash Sinha">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../aboutme/aboutme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
       
        <header> 
			<h1 class="heading"> Yash Sinha's Website </h1> 
		
		</header>
        
      
		<?php
		 $path = "jsmouse.php";
		 include '../templateHeader.php'
		 ?>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <section id="myCanvas" >

            <h2> Canvas </h2>
           
            <br>
            <br>

            <canvas id="canvas" width="500" height="300" style="border:1px solid green;">      


                
            </canvas>

            <br>
            <br>
            <br>
            
            <button onclick="faceImage()" id="face-change">
                Click to get Frowny Face!
            </button>

        </section>

        

        
        <script src="jsmouse.js"> </script>
    

        <br>
        <br>
        <br>

       	
        <?php 
            date_default_timezone_set("America/Denver");
            $uDate = date("m/d/y h:ia", filemtime('jsmouse.php'));
            
            include '../templateFooter.php';
        ?>

        
        
    </body>



</html>