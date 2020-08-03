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
    <link rel="stylesheet" href="aboutme.css">
</head>

    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
		<img src="../images/CSM_logo.png" style="width:150px;height:150px;" alt="Colorado School of Mines logo">
		  
		<!-- //<header class="heading"> <h1> Yash Sinha's Website </h1> </header> -->
		

		<?php 
			$path = "aboutme.php";
			include '../templateHeader.php'
		?>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<section>
			<br>
			<br>
			
			<h2>   About me!  </h2>

			<p>
				I was born in Mumbai, India. Before I arrived to Colorado 
				I lived in London for 3 years from April 2006 til November 2009, 
				and that's when I arrived to Colorado. I have gone to Hamilton Middle School, and tden I went to Regis Jesuit High School. Finally I now 
				go to Colorado School of Mines.
				<br>
				In <abbr title="Colorado School of Mines">CSM</abbr> I am a member of tde Karate Club,
				and <abbr title="Association of Computer Machinery">ACM</abbr> Club. 
			

				<br>
				You can jump below to my <a href="#H1" class="email">email</a> to contact me for any questions.
				
			
			</p>
			<div class="hobbies">
			My hobbies are the following:
				<ul>
					<li> Playing and watching soccer</li>
					<li> Learning Martial Arts</li>
					<li> Travelling to otder places around the world</li>
					<li> Playing video games</li>

				</ul>
					</div>

			<hr>
		</section>

		<section>
        	<h2> Coding </h2>
    
			<p>
				My favorite code programming language is Java because it has a lot of libraries, 
				it is very focused on object-oriented programming, and I like Eclipse IDE.
				I like how tdere's no pointers, and tdere's a concise syntax for creating new instances of objects
				as shown below. I also like how tde parameters in metdods are automatically inputted as a reference instead of
				value.
				
				<br>
				<code>
					Object s = new Object();
					<br>
					void sometding(int <del>&amp;</del> s) {
						...
					}

				</code>
				<br>
				I have experience in C++, Pytdon, TypeScript, HTML, CSS, Assembly language, Golang, 
				and Gamemaker Studio language.

			</p>

			<hr>
		
		</section>

		<section>

			<h2> Fun Facts </h2>
				<ul>
					
					<li> I was born on Christmas. </li>
					<li> I've travelled to Zurich, Switzerland multiple times in tde past.</li>
					<li> I've travelled to Disney World in Orlando, Florida. </li>
					<li> I'm currently using <a href="https://www.duolingo.com/">Duolingo</a> to learn Mandarin Chinese and to get better on Spanish.</li>
				</ul>
		</section>

		<section>
		<h2> Favorite Movies </h2>
		Here is a table of my favorite movies ranked.
		
		<table class="movies">
		  <thead> 
			  <tr>
				<th> Rank </th>
				<th> Movie </th>			
			
			  </tr>
		  
		  </thead>
		  
		  <tbody>
			  <tr id="r1">
				<td> 1 </td>
				<td> The Dark Knight </td>
				
			  </tr>
			  
			  <tr>
				<td> 2 </td>
				<td> Logan </td>
				
			  </tr>
			  
			  <tr>
				<td> 3 </td>
				<td> The Dark Knight Rises </td>
				
			  </tr>
			  
			  <tr>
				<td> 4 </td>
				<td> Avengers: Infinity War </td>
				
			  </tr>
			  
			  <tr>
				<td> 5 </td>
				<td> Avengers: Endgame </td>
			  
				</tr>
				

		  </tbody>
		</table>
		</section>
		

		<section>
		<h2> Video Games </h2>
		
		The following table shows a list of video games ranked.
		
		<table class="videogames">
		  <caption> Favorite Video Games </caption>
		  <thead> 
			  <tr>
				<th> Rank </th>
				<th> Videogame </th>			
			
			  </tr>
		  
		  </thead>
		  
		  <tbody>
			 
			  <tr>
				<td> 1 </td>
				<td> The Last of Us </td>
				
			  </tr>
			  
			  <tr>
				<td> 2 </td>
				<td> God of War (2018) </td>
				
			  </tr>
			  
			  <tr>
				<td> 3 </td>
				<td> Marvel's Spiderman </td>
				
			  </tr>
			  
			  <tr>
				<td> 4 </td>
				<td> Horizon Zero Dawn </td>
				
			  </tr>
			  
			  <tr>
				<td> 5 </td>
				<td> Injustice 2 </td>
	
				</tr>
				

		  </tbody>
		</table>
		
		</section>

		<br>

		<section class="mySchedule">
	    <h2> My Classes </h2>
		
		The following table is my class schedule for Fall 2019 semester.
		
		<table class="schedule">
		  
		  <thead>
				
				<tr>
					<th scope="row" id="blank"> </th>
					
					<th colspan="2" scope="col" id="m"> Monday </th>
					<th colspan="2" scope="col" id="t"> Tuesday </th>
					<th colspan="2" scope="col" id="w"> Wednesday </th>
					<th colspan="2" scope="col" id="th"> Thursday </th>
					<th colspan="2" scope="col" id="fri"> Friday </th>
				</tr>
		  </thead>
			
				

		  <tbody>
			<tr>
				<th scope="row" id="235"> MZ 235 </th>
				<td  id="235m" headers="235 m"> Computer Graphics </td>
				<td  id="235m1" headers="235 m"> 1:00 pm - 1:50 pm</td>
				<td id="bt" headers="t"> </td>
				<td  id="bt1" headers="t"> </td>
			
			
				<td id="235w" headers="235 w"> Computer Graphics </td>
				<td id="235w1" headers="235 w"> 1:00 pm - 1:50 pm</td>
				
				<td id="bth" headers="th">  </td>
				<td id="bth1" headers="th">  </td>
				<td id="bfri" headers="fri">  </td>
				<td id="bfri1" headers="fri">  </td>

			</tr>


			<tr>
				<th rowspan="2" scope="row" id="202"> HH 202 </th>
				<td id="bm" headers="m"> </td>
				<td id="bm1" headers="m">  </td>
				<td id="op" headers="202 t">  Operating Systems </td>
				<td id="op1" headers="202 t"> 12:30 - 1:45 pm</td>

				<td id="bw" headers="w"> </td>

				<td id="bw1" headers="w"> </td>

				<td id="op2" headers="202 th">  Operating Systems </td>
				<td id="op3" headers="202 th"> 12:30 - 1:45 pm</td>
				<td id="bfri2" headers="fri">  </td>
				<td id="bfri3" headers="fri">  </td>
				
				


			</tr>

			<tr> 
				<td id="bm2" headers="m">   </td>
				<td id="bm3" headers="m"> </td>
				<td id="et" headers="202 t">  Ethics </td>
				<td id="et1" headers="202 t"> 2:00 - 3:15 pm</td>

				<td id="bw2" headers="w"> </td>
				<td id="bw3" headers="w"> </td>

				<td id="et2" headers="202 th">  Ethics </td>
				<td id="et3" headers="202 th"> 2:00 - 3:15 pm</td>

				<td id="bfri4" headers="fri">  </td>
				<td id="bfri5" headers="fri">  </td>

			</tr>

			<tr>
				<th scope="row" id="022">  MZ022 </th>
				<td id="bm4" headers="m">  </td>
				<td id="bm5" headers="m">  </td>
				<td id="web" headers="022 t">  Web Programming </td>
				<td id="web1" headers="022 t">  3:30 - 4:45 pm</td>

				<td id="bw4" headers="w">  </td>
				<td id="bw5" headers="w">  </td>

				<td id="bth2" headers="th">  </td>
				<td id="bth3" headers="th">  </td>
				
				<td id="bfri6" headers="fri">  </td>
				<td id="bfri7" headers="fri">  </td>

			</tr>

			<tr>
				<th scope="row" id="026"> MZ026 </th>

				<td id="bm6" headers="m">  </td>
				<td id="bm7" headers="m">  </td>

				<td id="bt2" headers="t">  </td>
				<td id="bt3" headers="t">  </td>
				
				<td id="bw6" headers="w">  </td>
				<td id="bw7" headers="w">  </td>
				
				<td id="bth4" headers="th">  </td>
				<td id="bth5" headers="th"> </td>
				
				<td id="cgfri" headers="026 fri"> Computer Graphics </td>
				<td id="cgfri1" headers="026 fri">  1:00 - 1:50 pm </td>

			</tr>


		  </tbody>
			  
				
			
		</table>
		</section>
		
		<section>
        <h2> Future Plans </h2>
        <p>
        After I graduate I was thinking on focusing on getting a career on <mark>cybersecurity</mark>, <mark>cloud security</mark>, or <mark>software development.</mark>
        I am also planning on getting an <abbr title="Master of Business Administration">MBA</abbr> after working for a couple of years to work in management jobs. 
        </p>

		</section>

		<section>
        <h2> Favorite Quote </h2>
        <q>A journey of a thousand miles begins witd a single step</q> - Lao Tzu
		
		</section>

        <br>

		<br>
		

		<section>
			<h2> Contact me </h2>
			<div id="H1">
				If you have questions about myself, contact me using the email <a href="mailto:ysinha@mymail.mines.edu"> ysinha@mymail.mines.edu</a>
			</div> 
		</section>

		<br>
		<br>
		<br>
		
		
		<?php 
			date_default_timezone_set("America/Denver");
			$uDate = date("m/d/y h:i:sa", filemtime('aboutme.php'));
			
			include '../templateFooter.php';
		?>

		


</html>