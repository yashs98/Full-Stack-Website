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
    <link rel="stylesheet" href="../php/form.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">
       
        <header> 
			<h1 class="heading"> Movie Store  </h1> 
    
		</header>
        
      
		<?php
            $path = "orderform.php";
            include '../templateHeader.php'
		 ?>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php
            
            //header("location: orderform.php");
            $servername = 'localhost';
            $username = 'root';
            $password = 'maadurga';
            $dbname = 'ysinha_f19';

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $firstNameErr = $lastNameErr = $emailErr = $moviesErr = $quantityErr = $donationErr = "";
            $firstName = $lastName = $email = $movies = $quantity = $donation = $product =  "";
            
            $dateSubmit = "";
            $showDivFlag = true;

            $totalCost = 0;
            $donated = 0;
            $price = 0;
            $subTotal = 0;
            $priceNumber = 0;
            $productIndex = 0;
            
            $amountList = array();

            $quantities = array();

            $productList = array();
            $productLinks = array();
            $productPrices = array();
            $dates = array();

     
            $customerExist = false;
            $timeDuplicate = false;

            $customerID = -1;

            $query1 = "SELECT ProductName, ProductImage, ProductPrice, ProductQuantity FROM PRODUCTS";

            $query2 = "SELECT FirstName, LastName, Email, CustomerID FROM CUSTOMERS";

            

            $query4 = "SELECT OrderTime FROM ORDERS";

            $resultQuery = $conn->query($query1);

            $customerInfos = $conn->query($query2);

           

            $allTimes = $conn->query($query4);

            while($row = $resultQuery->fetch_assoc()) {
                array_push($productList, $row["ProductName"]);
                array_push($productLinks, $row["ProductImage"]);
                array_push($productPrices, $row["ProductPrice"]);
                array_push($quantities, $row["ProductQuantity"]);

            }

           

            while($row4 = $allTimes->fetch_assoc()) {
                array_push($dates, $row4["OrderTime"]);
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
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

                        for($i = 0; $i <sizeof($productList); $i++) {
                            if($movies === $productList[$i]) {
                                $productIndex = $i;
                            }
                        }
               
                        
                        if($movies === "select") {
                            $moviesErr = "Pick an option other than select";
                        }
                        

                        else {

                            if($quantities[$productIndex] <= 0) {
                                $moviesErr = "The product chosen is sold out. Please select another one.";
                            }

                            else {

                                for($i = 0; $i <sizeof($productList); $i++) {
                                    if($movies === $productList[$i]) {
                                       
                                        $price = '$' . $productPrices[$i];
                                        $priceNumber = $productPrices[$i];
                                        $totalCost = $totalCost + $priceNumber;
                                        $product = $productList[$i];
                                        break;
                                    }
                                }
                            }
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

                    else if($quantity > $quantities[$productIndex]) {
                        $quantityErr = "The quantity specified is greater than the amount available. Currently there's only " . $quantities[$productIndex] . " left.";
                    }

                    else {
                        $totalCost = $totalCost * $quantity;
                        $subTotal = $quantity * $priceNumber;

                        $quantities[$productIndex] -= $quantity;

                        $updateQuantity = "UPDATE PRODUCTS SET ProductQuantity= ? WHERE ProductName= ?"; 
                        
                        $resultQuery2 = $conn->prepare($updateQuantity);

                        $resultQuery2->bind_param("ss", $quantities[$productIndex], $productList[$productIndex]);

                        $resultQuery2->execute();

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

                
                if($donationErr === "" && $quantityErr === "" && $donationErr === "" && $firstNameErr === "" && $lastNameErr === "" && $emailErr === "" && $moviesErr === "") {
                    
                    $showDivFlag = false;
                    date_default_timezone_set("America/Denver");
                    $dateSubmit = date("l m/d/Y h:ia");
                    $queryTime = "SELECT OrderTime FROM ORDERS ORDER BY OrderTime DESC";

                    $currentDate = $conn->query($queryTime);
                    $checkDate = $currentDate->fetch_assoc();

                     

                    $dateQuery = $currentDate->fetch_assoc();
                    
                    $query3 = "SELECT c.FirstName, c.LastName, c.Email, c.CustomerID, o.OrderTime, o.ProductName FROM CUSTOMERS AS c, ORDERS AS o WHERE o.CustomerID = c.CustomerID";
                    
                    $checkDuplicates = $conn->query($query3);


                    while($row2 = $customerInfos->fetch_assoc()) {
                        if($firstName == $row2["FirstName"] && $lastName == $row2["LastName"] && $email == $row2["Email"]) {
                            $customerExist = true;
                            $customerID = $row2["CustomerID"];
                            break;
                                          

                        }
        
                    }

                    if(!$customerExist) {
                       
                        $updateCustomers = "INSERT INTO CUSTOMERS (FirstName, LastName, Email) VALUES (?, ?, ?)";
                        $resultQuery4 = $conn->prepare($updateCustomers);    
                        $resultQuery4->bind_param("sss", $firstName, $lastName, $email);
                        $resultQuery4->execute();
                       
                       
                        $getID = "SELECT CustomerID FROM CUSTOMERS WHERE FirstName = '" . $firstName . "' AND LastName = '" . $lastName . "' AND Email = '" . $email . "'";

                       
                        $resultQuery5 = $conn->query($getID);
           

                        while($row3 = $resultQuery5->fetch_assoc()) {
                            $customerID = $row3["CustomerID"];
                        }

                    
                        
                        

                        $alreadyMade = false;
                        while($row5 = $checkDuplicates->fetch_assoc()) {
                            
                            if($firstName === $row5["FirstName"] && $lastName === $row5["LastName"] && $email === $row5["Email"]  && $row5["OrderTime"] === $checkDate["OrderTime"] && $product === $row5["ProductName"]) {
                               
                                $alreadyMade = true;
                                break;
                            }
                        }

                       

                        if(!$alreadyMade) {
                            $updateOrders2 = "INSERT INTO ORDERS (OrderTime, ProductName, CustomerID, Tax, Donation, Total, OrderQuantity) VALUES(CURRENT_TIMESTAMP, ?, ?, ?, ?, ?, ?)"; 
                            $resultQuery3 = $conn->prepare($updateOrders2);
                            $resultQuery3->bind_param("ssssss", $product, $customerID, $tax, $donated, $totalCost, $quantity);
                            $resultQuery3->execute();
                        }
                

                    }

                    
                    else {

                        $alreadyMade = false;
                        $timeDuplicate = false;
                       

                        while($row6 = $checkDuplicates->fetch_assoc()) {
                            if($firstName === $row6["FirstName"] && $lastName === $row6["LastName"] && $email === $row6["Email"] &&  $row6["OrderTime"] === $checkDate["OrderTime"] && $product === $row6["ProductName"]) {
                               
                                $alreadyMade = true;
                                break;
                            }
                        }
                        
                      
                        
                        if(!$alreadyMade) {
                            $updateOrders2 = "INSERT INTO ORDERS (ProductName, CustomerID, Tax, Donation, Total, OrderQuantity) VALUES(?, ?, ?, ?, ?, ?)"; 
                            $resultQuery3 = $conn->prepare($updateOrders2);
                            $resultQuery3->bind_param("ssssss", $product, $customerID, $tax, $donated, $totalCost, $quantity);
                            $resultQuery3->execute();

                            $updateOrderTime = "UPDATE ORDERS SET OrderTime = CURRENT_TIMESTAMP WHERE CustomerID = ?";
                            $resultQuery6 = $conn->prepare($updateOrderTime);
                            $resultQuery6->bind_param("s", $customerID);
                            $resultQuery6->execute();
                        }

                    }
                   
                    include 'mysql_submit.php';

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

                <?php

                    


                    echo 'Movies: <select name="movies" class="movie-select">
                        <option value="select"> Select </option>';

                    for($i = 0; $i < sizeof($productList); $i++) {

                        if($quantities[$i] <= 0) {
                            echo '<option value="' . $productList[$i] . '"> ' . $productList[$i] . ' $' . $productPrices[$i] .  ' Sold Out </option>';
                        }

                        else {
                            echo '<option value="' . $productList[$i] . '"> ' . $productList[$i] . ' $' . $productPrices[$i] .  '</option>';
                        }
                    }

                   
                    

                    echo '</select>'; 

                    $conn->close();

                ?>


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

            "use strict";
            $(document).ready(function() {
                //var movieValue = $('.movie-select').val();
                $(".movie-select").on('change', movie_choice);


           



            })

            var productList = <?php echo json_encode($productList); ?>;

            var productLinks = <?php echo json_encode($productLinks); ?>;
            

            function movie_choice() {
                var movieValue = $(".movie-select").val();
               

                if(movieValue != "select") {

                  for(var j = 0; j<productList.length; j++) {
                      
                      if(productList[j] === movieValue) {
                          
                          $(".product").html('<img src="' + productLinks[j] + '" alt="' + productLinks[j] + '" height="450" width="350" class="movie">');
                          break;
                      
                        }

                  }

                }

                else if(movieValue == "select") {
                    
                    $(".product").html('');
                }
            }

            
        
        </script>

        
       
       	
        <?php 
            date_default_timezone_set("America/Denver");
            $uDate = date("m/d/y h:ia", filemtime('orderform.php'));
            
            include '../templateFooter.php';
        ?>

        
        
    </body>



</html>