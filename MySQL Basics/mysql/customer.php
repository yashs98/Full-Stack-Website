






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
            $path = "customer.php";
            include '../templateHeader.php'
         ?>

         <br>
         <br>
         <br>
         <br>
         <br>
         <br>

         
            
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'maadurga';
            $dbname = 'ysinha_f19';

        
            $conn = new mysqli($servername, $username, $password, $dbname);

            $LinkedID = $_GET['subject'];
            
            $queryOrderInfo = "SELECT * FROM ORDERS WHERE CustomerID = " . $LinkedID;

            $resultQuery = $conn->query($queryOrderInfo);
            $grandTotal = array(0.0, 0.0, 0.0, 0.0, 0.0);
            $averages = array();
            $orderAmount = 0;



            echo '<table class="orders">
		  
            <thead>
                  
                  <tr>
                      
                      <th colspan="1" scope="col" id="orderNum"> Order # </th>
                      <th colspan="1" scope="col" id="pd"> Purchase Date </th>
                      <th colspan="1" scope="col" id="movie"> Movie </th>
                      <th colspan="1" scope="col" id="q"> Quantity </th>
                      <th colspan="1" scope="col" id="subtotal"> Subtotal </th>
                      <th colspan="1" scope="col" id="tax"> Tax </th>
                      <th colspan="1" scope="col" id="don"> Donation </th>
                      <th colspan="1" scope="col" id="total"> Total </th>
                  </tr>
            </thead>
            
            <tbody>'; 

            while($rowOrder = $resultQuery->fetch_assoc()) {

                $grandTotal[0] =  $grandTotal[0] + $rowOrder["OrderQuantity"];
                $grandTotal[1] = $grandTotal[1] + ($rowOrder["Total"] - $rowOrder["Tax"] - $rowOrder["Donation"]);
                $grandTotal[2] = $grandTotal[2] + $rowOrder["Tax"];
                $grandTotal[3] =  $grandTotal[3] + $rowOrder["Donation"];
                $grandTotal[4] = $grandTotal[4] + $rowOrder["Total"];
                $orderAmount++;

               


           echo ' 

                
                <tr>
        
                    <td> ' . $rowOrder["OrderID"] . '</td>
                    <td> ' . $rowOrder["OrderTime"] . '</td>
                    <td> ' . $rowOrder["ProductName"] . ' </td>
                    <td> ' . $rowOrder["OrderQuantity"] . '</td>
                    <td> $' . ($rowOrder["Total"] - $rowOrder["Tax"] - $rowOrder["Donation"]) . '</td>
                    <td> $' . $rowOrder["Tax"] . '</td>
                    <td> $' . $rowOrder["Donation"] . '</td>
                    <td> $' . $rowOrder["Total"] . '</td>

        
                </tr>
        
            '; 

            }

            array_push($averages, $grandTotal[0]/$orderAmount);
            array_push($averages, $grandTotal[1]/$orderAmount);
            array_push($averages, $grandTotal[2]/$orderAmount);
            array_push($averages, $grandTotal[3]/$orderAmount);
            array_push($averages, $grandTotal[4]/$orderAmount);

            echo '
            
                <tr style="background-color: brown;">
                <td >  Grand Total </td>
                <td >  </td>
                <td >  </td>
                <td > ' .  $grandTotal[0] . '</td>
                <td > $' .  number_format($grandTotal[1], 2, '.', '') . '</td>
                <td> $' .  number_format($grandTotal[2], 2, '.', '')  . '</td>
                <td> $' .  number_format($grandTotal[3], 2, '.', '')  . '</td>
                <td > $' .  number_format($grandTotal[4], 2, '.', '')  . '</td>


                </tr>
            
            '

            . '

                <tr>
                <td >  Average </td>
                <td >  </td>
                <td >  </td>
                <td > ' .  number_format($averages[0], 2, '.', '') . '</td>
                <td > $' .  number_format($averages[1], 2, '.', '') . '</td>
                <td > $' .  number_format($averages[2], 2, '.', '') . '</td>
                <td > $' .  number_format($averages[3], 2, '.', '') . '</td>
                <td > $' .  number_format($averages[4], 2, '.', '') . '</td>


                </tr>

            
            
            '

            .
        
            '</tbody>
            
            </table>';
            


        ?>


        <br>
        <br>
        <br>


         <?php 
            date_default_timezone_set("America/Denver");
            $uDate = date("m/d/y h:ia", filemtime('allorders.php'));
            
            include '../templateFooter.php';
        ?>



    </body>

</html>