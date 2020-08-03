
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
    <link rel="stylesheet" href="allorders.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    
</head>
    <body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Comfortaa; background-color:aquamarine">

    <?php
            $path = "allorders.php";
            include '../templateHeader.php'
    ?>

    <br>
    <br>
    <br>
    <h1> All Orders </h1>
    
    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'maadurga';
    $dbname = 'ysinha_f19';

    //"SELECT o.OrderTime, o.ProductName, o.Total, o.OrderQuantity, "

    $conn2 = new mysqli($servername, $username, $password, $dbname);

    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }

    $queryAllOrders = "SELECT o.OrderTime, o.ProductName,o.OrderQuantity, o.Total, c.FirstName, c.LastName, c.Email, c.CustomerID FROM ORDERS AS o , CUSTOMERS AS c WHERE c.CustomerID = o.CustomerID";
    $resultQuery = $conn2->query($queryAllOrders);


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
    $emailList = array();
    $customerIDList = array();


    if($resultQuery->num_rows === 0) {
        echo '<br> <br> <span style="font-size: 16pt; margin-bottom: 10px; color: darkgreen; background-color: white; margin-left: 10px;"> No orders made yet. </span>';
    }

    else {

        while($row = $resultQuery->fetch_assoc()) {

            for($i = 0; $i<sizeof($customerList); $i++) {
                if($customerList[$i] == $row["FirstName"] . ' ' . $row["LastName"] && $emailList[$i] == $row["Email"]) {
                    $customerIndex = $i;

                    break;
                }
            }
            

            if($customerIndex == -1) {

                array_push($customerList, $row["FirstName"] . ' ' . $row["LastName"]); 
                array_push($emailList, $row["Email"]);
                array_push($customerIDList, $row["CustomerID"]);

                array_push($dateList, array($row["OrderTime"]));
                array_push($productList, array($row["ProductName"]));
                array_push($quantityList, array($row["OrderQuantity"]));
                array_push($totalList, array($row["Total"]));

                
        

            }

            else {
                

                
                array_push($dateList[$customerIndex],$row["OrderTime"]);
                array_push($productList[$customerIndex], $row["ProductName"]);
                array_push($quantityList[$customerIndex], $row["OrderQuantity"]);
                array_push($totalList[$customerIndex],$row["Total"]);


            }

           
            $customerIndex = -1;
          
            

        }

 

        echo '<br>';

        for($k = 0; $k<sizeof($customerList); $k++) {
            $totalCustomer = 0;

           

            echo '<div class="orders" style="font-size: 16pt; margin-bottom: 30px; color: darkgreen; background-color: white; margin-left: 10px;">';
            

            echo 'Customer: <a href="customer.php?subject=' . $customerIDList[$k] . '"> '  . $customerList[$k] . '</a>';
            echo '<br>';
            echo 'Email: ' . $emailList[$k] . '<br>';
            for($l = 0; $l<sizeof($dateList[$k]); $l++) {

                echo 'On ' . $dateList[$k][$l] . ' ordered ' . $quantityList[$k][$l] . ' ' . $productList[$k][$l] . ' DVD. Total: $' . $totalList[$k][$l];
                
                echo '<br>';
                $totalCustomer += $totalList[$k][$l];

            }


            echo ' Customer Total: $' .  number_format($totalCustomer, 2, '.', '');


            echo '<br> <br>';
            echo '</div>';


    }

        echo '<br><br> <br>';

   
    }

    echo '<br>';


    $customersAmount = 0;
    $ordersAmount = 0;
    $numberUnits = 0;
    $totalSubTotal = 0;
    $totalTax = 0;
    $totalDonations = 0;

    $grandTotal = array();

    $servername = 'localhost';
    $username = 'root';
    $password = 'maadurga';
    $dbname = 'ysinha_f19';

    $customerLinkedID = 


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query1 = "SELECT * FROM ORDERS";

    $query2 = "SELECT * FROM CUSTOMERS";


    $resultOrders = $conn->query($query1);

    $resultCustomers = $conn->query($query2);


    while($rowOrder = $resultOrders->fetch_assoc()) {
        $ordersAmount++;
        $numberUnits += $rowOrder["OrderQuantity"];
        $totalSubTotal += $rowOrder["Total"] - $rowOrder["Tax"] - $rowOrder["Donation"];
        $totalTax += $rowOrder["Tax"];
        $totalDonations += $rowOrder["Donation"];
        
    }

    while($rowCustomer = $resultCustomers->fetch_assoc()) {
        $customersAmount++;
    }

    if($customersAmount <= 0) {
        $customersAmount = 1;
    }

    if($ordersAmount <= 0) {
        $ordersAmount = 1;
    }

    array_push($grandTotal, number_format($totalSubTotal + $totalTax + $totalDonations, 2, '.', ''));
    
    
    array_push($grandTotal, number_format($numberUnits/$ordersAmount + $totalSubTotal/$ordersAmount + $totalTax/$ordersAmount + $totalDonations/$ordersAmount, 2, '.', ''));

    array_push($grandTotal, number_format( $numberUnits/$customersAmount + $totalSubTotal/$customersAmount + $totalTax/$customersAmount + $totalDonations/$customersAmount, 2, '.', ''));
    
    echo '<table class="orders">
		  
    <thead>
          
          <tr>
              
              <th colspan="1" scope="col" id="blank"> </th>
              <th colspan="1" scope="col" id="ta"> Total Amount </th>
              <th colspan="1" scope="col" id="ao"> Average Amount Per Order </th>
              <th colspan="1" scope="col" id="ac"> Average Amount Per Customer </th>
          </tr>
    </thead>'; 

    echo ' 
    <tbody>
        <tr>
            <th> Customers </th>

            <td> ' . $customersAmount . '</td>
            
            <td> N/A </td>
            <td> N/A </td>       


        </tr>


        <tr>
            <th> Orders </th>

            <td> ' . $ordersAmount . '</td>
            <td> N/A </td>
            <td> ' . number_format($ordersAmount/$customersAmount, 2, '.', '') . '</td>
        
        </tr>

        <tr>

            <th> Number Units </th>
            <td> ' . $numberUnits . '</td>
            <td> ' . number_format($numberUnits/$ordersAmount, 2, '.', '') . ' </td>
            <td> ' . number_format($numberUnits/$customersAmount, 2, '.', '') . ' </td>

        </tr>

        <tr>

            <th> Subtotal </th>
            <td> $' . number_format($totalSubTotal, 2, '.', '') . '</td>
            <td> $' . number_format($totalSubTotal/$ordersAmount, 2, '.', '') . ' </td>
            <td> $' . number_format($totalSubTotal/$customersAmount, 2, '.', '') . '</td>


        </tr>

        <tr>

            <th> Tax </th>
            <td> $' . number_format($totalTax, 2, '.', '') . '</td>
            <td> $' . number_format($totalTax/$ordersAmount, 2, '.', '') . ' </td>
            <td> $' . number_format($totalTax/$customersAmount, 2, '.', '') . '</td>

        </tr>

        <tr>

            <th> Donations </th>
            <td> $' . number_format($totalDonations, 2, '.', '') . '</td>
            <td> $' . number_format($totalDonations/$ordersAmount, 2, '.', '') . ' </td>
            <td> $' . number_format($totalDonations/$customersAmount, 2, '.', '') . '</td>

        </tr>

        <tr>

            <th> Grand Total </th>
            <td> $' . $grandTotal[0] . '</td>
            <td> $' . $grandTotal[1] . ' </td>
            <td> $' . $grandTotal[2] . '</td>

        </tr>

    ' .

    '</tbody>
    
    </table>';

    $conn2->close();

    echo '<br> <br>';

    ?>



    <?php 
        date_default_timezone_set("America/Denver");
        $uDate = date("m/d/y h:ia", filemtime('allorders.php'));
        
        include '../templateFooter.php';
    ?>



    </body>

</html>

