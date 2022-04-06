<html>  
    <body>
    <link rel="stylesheet" href="style2.css"></link>
    <div class="loginform1">
    </body>
</html>
<?php
    session_start();

    echo "<br>Customer Name : ".$_SESSION['name'];
    echo "<br>";
    echo "<br>Customer Address : ".$_SESSION['addr'];
    echo "<br>";
    echo "<br>Customer Number : ".$_SESSION['number'];
    echo "<br>";
    echo "<br><br><br><br>";
 
    $p1=$_REQUEST['p1'];
    $q1=$_REQUEST['q1'];
    $c1=$_REQUEST['c1'];

    $p2=$_REQUEST['p2'];
    $q2=$_REQUEST['q2'];
    $c2=$_REQUEST['c2'];

    $total1=$q1*$c1;
    $total2=$q2*$c2;

    echo "<table border=3>";
        echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Quantity</th>";
            echo "<th>Rate</th>";
            echo "<th>Total</th>";
        echo "<tr>";

        echo "<tr>";
            echo "<td>".$p1."</td>";
            echo "<td>".$q1."</td>";
            echo "<td>".$c1."</td>";
            echo "<td>".$total1."</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>".$p2."</td>";
            echo "<td>".$q2."</td>";
            echo "<td>".$c2."</td>";
            echo "<td>".$total2."</td>";
        echo "</tr>";

        $grand=$total1+$total2;

        echo "<tr>";
            echo "<td colspan=3>GRAND TOTAL</td>";
            echo "<td>".$grand."</td>";

        echo "</tr>";

    echo "</table>";
    echo "<br><br><br>";

    echo "<label>Rate Our Services:</label>
                     <select>
                     <option>Excellent</option>
                     <option>Good</option>
                     <option>Need to improve</option>
                     <option>Bad</option>
                     </select>";
                     echo "<br><br>";
?>

<html>  
    <body>
    <marquee direction="left">Visit Again :)</marquee>
    </body>
</html>

