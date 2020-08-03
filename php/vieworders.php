
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

    <?php
            $path = "vieworders.php";
            include '../templateHeader.php'
    ?>

    
    <?php

    $customerName = "";
    $date = "";
    $product = "";
    $quantity = 0;
    $total = 0;
    $ordersMade = array();


    $isCustomerThere = false;

    $customerList = array();
    $dateList = array();
    $productList = array();
    $quantityList = array();
    $totalList = array();
    $customerIndex = -1;
    $orderinfos = array();


    if(($orders = fopen("orders.csv", "r")) === FALSE) {
        echo '<br> <br> <span class="error"> No orders made yet. </span>';
    }

    else if(($orders = fopen("orders.csv", "r")) !== FALSE) {

        while(($data = fgetcsv($orders, 1000, ",")) !== FALSE) {

            for($i = 0; $i<sizeof($customerList); $i++) {
                if($customerList[$i] == $data[0]) {
                    $customerIndex = $i;
                }
            }
            

            if($customerIndex == -1) {

                array_push($customerList, $data[0]); 

                array_push($dateList, array($data[1]));
                array_push($productList, array($data[2]));
                array_push($quantityList, array($data[3]));
                array_push($totalList, array($data[4]));
                
        

            }

            else {
                $temp = array($data[1], $data[2], $data[3], $data[4]);

                
                array_push($dateList[$customerIndex], $temp[0]);
                array_push($productList[$customerIndex], $temp[1]);
                array_push($quantityList[$customerIndex], $temp[2]);
                array_push($totalList[$customerIndex], $temp[3]);


            }

           
            $customerIndex = -1;
          
            

        }

        echo '<br> <br> <br>';

        for($k = 0; $k<sizeof($customerList); $k++) {
            $totalCustomer = 0;

            echo '<div class="orders" style="font-size: 16pt; margin-bottom: 10px; color: darkgreen; background-color: white; margin-left: 10px;">';
            echo '<ul>';

            echo '<li> Customer: ' . $customerList[$k] . '</li>';
            echo '<ul>';
            for($l = 0; $l<sizeof($dateList[$k]); $l++) {

                echo '<li> On ' . $dateList[$k][$l] . ' ordered ' . $quantityList[$k][$l] . ' ' . $productList[$k][$l] . '. Total: ' . $totalList[$k][$l];
                
                $totalCustomer += $totalList[$k][$l];

            }

            echo '</ul>';

            echo '<br> Customer Total: $' .  number_format($totalCustomer, 2, '.', '');


            echo '</ul>';

            echo '<br>';
            echo '</div>';


        }

        echo '<br><br> <br>';

        fclose($orders);
    }




    ?>



    <?php 
        date_default_timezone_set("America/Denver");
        $uDate = date("m/d/y h:ia", filemtime('vieworders.php'));
        
        include '../templateFooter.php';
    ?>



    </body>

</html>

