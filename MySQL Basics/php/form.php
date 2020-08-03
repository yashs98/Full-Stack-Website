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
    <link rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
       
        <header> 
			<h1 class="heading"> Movie Store  </h1> 
    
		</header>
        
      
		<?php
            $path = "form.php";
            include '../templateHeader.php'
		 ?>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php
            

            $firstNameErr = $lastNameErr = $emailErr = $moviesErr = $quantityErr = $donationErr = "";
            $firstName = $lastName = $email = $movies = $quantity = $donation = $product =  "";
            
            $dateSubmit = "";
            $showDivFlag = true;

            $totalCost = 0;
            $donated = 0;
            $price = 0;
            $subTotal = 0;
            $priceNumber = 0;
           
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //header("Refresh:0");
                if(empty($_POST["firstName"])) {
                    $firstNameErr = "First name is required";
                }

                else {
                    $firstName = test_input($_POST["firstName"]);

                    if(!preg_match("/^[a-zA-Z']*$/", $firstName)) {
                        $firstNameErr = "Invalid first name";
                    }

                    else {
                        $firstNameErr = "";
                    }
                }

                if(empty($_POST["lastName"])) {
                    $lastNameErr = "Last name is required";
                }

                else {
                    $lastName = test_input($_POST["lastName"]);

                    if(!preg_match("/^[a-zA-Z']*$/", $lastName)) {
                        $lastNameErr = "Invalid last name";
                    }
                }


                if(empty($_POST["email"])) {
                    $emailErr = "Email address is required";

                }

                else {
                    $email = test_input($_POST["email"]);

                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }

                if(empty($_POST["movies"])) {
                    $moviesErr = "Please pick a movie";
                }

                else {
                    $movies =  test_input($_POST["movies"]);
                    
                    if($movies === "select") {
                        $moviesErr = "Pick an option other than select";
                    }

                    else if($movies === "infinitywar") {
                        $price = '$' . 41.99;
                        $priceNumber = 41.99;
                        $totalCost = $totalCost + 41.99;
                        $product = "Avengers: Infinity War";
                    }

                    else if($movies === "imitation") {
                        $price = '$' . 32.89;
                        $priceNumber = 32.99;
                        $totalCost = $totalCost + 32.89;
                        $product = "The Imitation Game";
                    }

                    else if($movies === "darkknight") {
                        $price = '$' . 16.99;
                        $priceNumber = 16.99;
                        $totalCost = $totalCost + 16.99;
                        $product = "The Dark Knight";
                    }

                    else if($movies === "gump") {
                        $price = '$' . 8.99;
                        $priceNumber = 8.99;
                        $totalCost = $totalCost + 8.99;
                        $product = "Forrest Gump";
                    }

                    $tax = 0.05 * $totalCost;

                    $totalCost = $totalCost + $tax;
                    
                    
                }

                if(empty($_POST["quantity"])) {
                    $quantityErr = "Specifying the quantity is required";
                }

                else {
                    $quantity = test_input($_POST["quantity"]);

                    if(!is_numeric($quantity) || (double)$quantity <= 0) {
                        $quantityErr = "Please provide a valid number greater than 0.";
                    }

                    else {
                        $totalCost = $totalCost * $quantity;
                        $subTotal = $quantity * $priceNumber;
                    }



                }

                if(empty($_POST["donate"])) {
                    $donationErr = "Please choose whether you want to donate.";
                }

                else {
                   $donation = test_input($_POST["donate"]);

                   if($donation == "yes") {
                       $donateTotalCost = ceil($totalCost);
                       $donated = $donateTotalCost - $totalCost;

                       $totalCost = $donateTotalCost;


                   }

                   
                }

               
                
                if($donationErr === "" && $quantityErr === "" && $donationErr === "" && $firstNameErr === "" && $lastNameErr === "" && $emailErr === "") {
                    
                    $showDivFlag = false;
                    date_default_timezone_set("America/Denver");
                    $dateSubmit = date("l m/d/Y h:ia");

                    include 'form_submit.php';

                }

               

            }           


            function test_input($data) {

               
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }


        ?>

        

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="shop" <?php if ($showDivFlag===false){?>style="display:none"<?php } ?>>
            <p><span class="error">* required field</span></p>
            <fieldset class="personal-info">
                <legend> Personal Information </legend>
                First name: <input type="text" name="firstName" autocomplete="off" class="firstName"> <span class="error">* <?php echo $firstNameErr;?></span> <br> 
                Last name: <input type="text" name="lastName" autocomplete="off" class="lastName"> <span class="error">* <?php echo $lastNameErr;?></span> <br> 
                Email Address: <input type="text" name="email" autocomplete="off" class="email"> <span class="error">* <?php echo $emailErr;?></span> <br> 

            </fieldset>
                <br>

            <fieldset>
                <legend> Purchase Information </legend>

                Movies: <select name="movies" class="movie-select">
                    <option value="select"> Select </option>
                    <option value="infinitywar"> Avengers: Infinity War ($41.99) </option>
                    <option value="imitation"> The Imitation Game ($32.89) </option>
                    <option value="darkknight"> The Dark Knight ($16.99) </option>
                    <option value="gump"> Forrest Gump ($8.99) </option> 

                </select> 

                <span class="error">* <?php echo $moviesErr;?></span>

                <div class="product">

                </div>  
                
                

                <br>
                Quantity: <input type="text" name="quantity" class="quantity"> <span class="error">* <?php echo $quantityErr;?></span> <br>
                
                Would you like to round up to the nearest dollar and donate?  <span class="error">* <?php echo $donationErr;?></span> <br>

                <input type="radio" name="donate" value="yes"> Yes <br>
                <input type="radio" name="donate" value="no"> No

            </fieldset>

            <input type="submit" value="Submit" id="submit">

            <input type="reset" id="reset">
           

        </form>

        <script>
            $(document).ready(function() {
                //var movieValue = $('.movie-select').val();
                $(".movie-select").on('change', movie_choice);
                

            })

            function movie_choice() {
                var movieValue = $(".movie-select").val();
                console.log(movieValue);

                if(movieValue != "select") {

                    if(movieValue === "infinitywar") {
                        $(".product").html('<img src="../images/infinitywar.jpg" alt="Avengers: Infinity War DVD Cover" height="450" width="350" class="movie">');
                    }

                    else if(movieValue === "imitation") {
                        $(".product").html('<img src="../images/imitationgame.jpg" alt="The Imitation Game DVD Cover" height="450" width="350" class="movie">');
                    }

                    else if(movieValue === "darkknight") {
                        $(".product").html('<img src="../images/thedarkknight.jpg" alt="The Dark Knight DVD Cover" height="450" width="350" class="movie">');
                    }

                    else if(movieValue === "gump") {
                        $(".product").html('<img src="../images/forrestgump.jpg" alt="The Dark Knight DVD Cover" height="450" width="350" class="movie">');
                    }

                }

                else if(movieValue == "select") {
                    $(".product").html('');
                }
            }

            
        
        </script>

        
       
       	
        <?php 
            date_default_timezone_set("America/Denver");
            $uDate = date("m/d/y h:ia", filemtime('form.php'));
            
            include '../templateFooter.php';
        ?>

        
        
    </body>



</html>