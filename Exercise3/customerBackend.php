<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div id="table">
    <table>
        <tr>
            <td>Receipt:</td>
            <td>
                Quantity
            </td>
            <td>
                Cost Per Item
            </td>
            <td>
                Total
            </td>
            <?php 
            $array = array($_POST{"quant"}, $_POST{"quant-sau"}, $_POST{"quant-meat"});
            for ($x = 0; $x < 3; $x++) {
                if (empty($array[$x]) ) {
                    $array[$x] = 0;
                }
            }
            $shipping = $_POST["q5"];
            $total;
            
            
            $shippingCost;
            if ($shipping == "7 day") {
                $shippingCost = 0;
               
            }
            if ($shipping == "overnight") {
                $shippingCost = 50;
               
            }
            if ($shipping == "3 day") {
                $shippingCost = 5;
            }
            $total = $shippingCost + $array[0]*10 + $array[1]*12.5 + $array[2]*15; 
            
            for ($x = 0; $x <= 4; $x++) {
                echo "<tr>";
                for ($y = 0; $y < 3; $y++) {
                    if ($y == 0 ) {
                        if ($x == 0) {
                            echo "<td> Pepperroni</td>";
                        } 
                        if ($x == 1) {
                            echo "<td> Pepperroni & Sausage</td>";
                        }
                        if ($x == 2) {
                            echo "<td> Meatlovers</td>";
                        } 
                        if ($x == 3) {
                            echo "<td> Shipping</td>";
                        } 
                        if ($x == 4) {
                            echo "<td> Total cost</td><td></td><td></td>";
                        } 
                    } else if ($y == 1 AND $x < 3){
                        echo "<td>" . $array[$x]. "</td>";
                    }  else if($y == 2) {
                        if ($x == 0) {
                            echo "<td> $10.00 </td>" ;
                            echo "<td>$" . $array[0]*10 . "</td>" ;
                        }
                        if ($x == 1) {
                            echo "<td> $12.50 </td>" ;
                            echo "<td>$" . $array[1]*12.5 . "</td>";
                        }
                        if ($x == 2) {
                            echo "<td> $15.00 </td>" ;
                            echo "<td>$" . $array[2]*15 . "</td>";
                        }
                        if ($x == 3) {
                            echo "<td>". $shipping ."</td><td></td>";
                            echo "<td>$". $shippingCost . "</td>";
                        } 
                        if ($x == 4) {
                            echo "<td>$" . $total . "</td>";
                        }
                    } 


                } 
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    </div>



</body>
</html>