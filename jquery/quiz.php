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
	<link rel="stylesheet" href="quiz.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
       
        <header> 
			<h1 class="heading"> Soccer Quiz </h1> 
		
		</header>
        
      
		<?php
		 $path = "quiz.php";
		 include '../templateHeader.php';
		
		?>

		<br>
		
					
		<form>
				
							
				<aside class="history" style="height=30%; padding-bottom: 40%;">
						<h2> Question History </h2>
					
						<p class="score"> </p>


				</aside>

		


				<section class="question">
						<h3> Question </h3>

					<br>
					<br>

					<textarea class="question-box">
					
						
					</textarea>

				</section>

				<div class="over">

				</div>

				<section  class="answer">
						<h5> Answer </h5>
	
						

						<br>

						<div id="pick-option">
							<label>	True <input type="radio" name="option" value="true" class="true" >  </label>


							<label>	False <input type="radio" name="option" value="false" class="false">  </label>

							
							<br>

						</div>
						
						<div id="submit-answer">
						<button id="submit">
							Submit Answer
						</button>

						<p id="error"> </p>

						<p id="error2"> Please answer the current question. </p>
					</div>
	
				</section>


				<br>

			

				<br>
				<br>
				<br>
				<div class="topics" style="margin-left: 30%;">
					<button id="player">
						Player
					</button>

					<button id="world-cup">
						World Cup
					</button>

					<button id="league">
						Leagues
					</button>

					<button id="rules">
						Rules
					</button>
				</div>

		

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		</form>

		
	
		<?php 
			date_default_timezone_set("America/Denver");
			$uDate = date("m/d/y h:ia", filemtime('quiz.php'));
			
			require '../templateFooter.php';
		?>

		<script src="quiz.js"> </script>
		
	</body>
		
</html>