


<?php

        if(!$customerExist) {
            echo '<p style="font-size: 16pt; margin-bottom: 10px;"> Welcome new customer! </p>';
        }

        else {
            echo '<p style="font-size: 16pt; margin-bottom: 10px;"> Thanks for shopping with us again! </p>';
        }

        

        echo '<fieldset class="receipt" style="font-size: 16pt; margin-bottom: 10px; color: white;"> ';


        echo '<legend> Receipt </legend>';
        
       
        echo 'Order Submitted By: ' . $firstName . ' ' . $lastName . "<br>";
            
        echo ' Order Submitted At: '  . $dateSubmit . "<br>"; 
            
        echo  'Movie Purchased:  '   . $product . "<br>"; 

        echo    'Price Per unit:   ' . $price . "<br>";

        echo    'Quantity:  ' .$quantity . "<br>";

        echo   'SubTotal:   $' . $subTotal . "<br>";

        echo 'Tax:       $' . number_format($tax, 2, '.', '') . "<br>";

        echo 'Donation:  $' . round($donated, 2) . "<br>";

        echo 'Total: $' .  number_format($totalCost, 2, '.', '') . "<br>";

        echo '</fieldset>';


        echo '<p id="email">Thank you for your purchase. A confirmation email has been sent to ' . $email . "</p><br>";

        echo "<br> <br> <br>";

        echo '<p style="font-size: 16pt;">You can view all <a href="vieworders.php"> orders here. </a> </p>';

        echo '<p style="font-size: 16pt;">If you want to make another purchase, then come back <a href="orderform.php"> to the store. </a> </p>';
        
       

?>

<!-- <script> 

$('.class').submit(function(){
    $(this).find(':input[type=submit]').prop('disabled', true);
});

</script>  -->


<html lang="en">

<head>
    <Title>
        Yash Sinha - Synopsis
    </Title>
    <meta charset="UTF-8">
	<meta name="author" content="Yash Sinha">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../aboutme/aboutme.css">
    <link rel="stylesheet" href="./form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">

    </body>

</html>



