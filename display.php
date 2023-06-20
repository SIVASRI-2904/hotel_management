<?php
include_once 'connection.php';
$sql1 = "SELECT * FROM CUSTOMERS;";
$sql2 = "SELECT * FROM BOOKING";

$display1= mysqli_query($conn,$sql1);
$display2 = mysqli_query($conn,$sql2);

if($display1 && $display2)
{
    echo "<h2 style= 'font-weight : bold; text-align : center'>"."CUSTOMER DETAILS"."</h2>";
    echo "<table style= 'margin-left : auto; margin-right : auto; text-align : center'>
    <tr>
    <th>CID</th>
    <th>CName</th>
    <th>Doorno</th>
    <th>City</th>
    <th>CPHN</th>
    </tr>";

    while($customers = mysqli_fetch_array($display1)){
        echo "<tr>";
        echo "<td>".$customers['CID']."</td>";
        echo "<td>".$customers['CNAME']."</td>";
        echo "<td>".$customers['DOORNO']."</td>";
        echo "<td>".$customers['CITY']."</td>";
        echo "<td>".$customers['CPHN']."</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<h2 style= 'font-weight : bold; text-align : center'>"."BOOKING DETAILS"."</h2>";
    echo "<table style= 'margin-left : auto; margin-right : auto; text-align : center'>
    <tr>
    <th>CID</th>
    <th>CHECK_IN</th>
    <th>CHECK_OUT</th>
    <th>NO_OF_PERSONS</th>
    <th>TYPE</th>
    <th>COST</th>
    </tr>";

    while($booking = mysqli_fetch_array($display2)){
        echo "<tr>";
        echo "<td>".$booking['CID']."</td>";
        echo "<td>".$booking['CHECK_IN']."</td>";
        echo "<td>".$booking['CHECK_OUT']."</td>";
        echo "<td>".$booking['NO_OF_PERSONS']."</td>";
        echo "<td>".$booking['TYPE']."</td>";
        echo "<td>".$booking['COST']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
mysqli_close($conn);
?>
