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
    <link rel="stylesheet" href="../darkmode.css">

    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
       

        <header> 
            <h1 class="heading"> Yash Sinha's Website </h1> 
            
            <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" /> Switch
                        
                        <span class="slider round"></span>
                  </label>
                  <em>Enable Dark Mode!</em>
                </div>
		
		</header>
        
        <br>
        <br>
      
		<?php
		 $path = "jskeyboard.php";
		 include '../templateHeader.php'
		 ?>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
      
            

            <canvas id="canvas2" width="580" height="310" style="border:1px solid violet;">
                
                <div>

                </div>


            </canvas>
       

   

        <script src="jskeyboard.js"> </script>
        <script src="../darkmode.js"> </script>
        
    
        <br>
        <br>
        <br>

        	
		<?php 
			date_default_timezone_set("America/Denver");
			$uDate = date("m/d/y h:ia", filemtime('jskeyboard.php'));
			
			include '../templateFooter.php';
		?>


        
        
    </body>



</html>