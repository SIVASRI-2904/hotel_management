<?php
include_once 'connection.php';
if(isset($_POST['save']))
{
$id=$_POST['id'];	
$paym=$_POST['paym'];
$rtype=$_POST['rtype'];  
 $cost=$_POST['cost'];
$Quantity=$_POST['Quantity'];
    $inDate=$_POST['inDate']; 
    $outDate=$_POST['outDate'];
    $nroom=$_POST['nroom'];
 $final_price=$nroom*$cost;


$sql1 = "INSERT INTO booking(rid,cid,check_in,check_out,no_of_persons,type,cost)
VALUES('0','$id','$inDate','$outDate','$Quantity','$rtype','$final_price')" ;

$sql2="INSERT INTO payment(pid,cid,methodpay)
VALUES('0','$id','$paym')" ;

 if (mysqli_query($conn, $sql1)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql1 . "
" . mysqli_error($conn);
    
	 }
 if (mysqli_query($conn, $sql2)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql2 . "
" . mysqli_error($conn);
    
	 }
$query="SELECT cost as 'Total_cost' from  booking  where CID=$id";
    $res=mysqli_query($conn,$query);
    $data=mysqli_fetch_array($res);

    echo"<h3>TOTAL COST : </h3>".$data['Total_cost'];

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h3>CANCEL:</h3>
<form method="post" action="deletion1.php">
<br>
<P>
<label for="customer id">CUSTOMER ID:</label>
<input type="text" name="CID"></P>  
<br>
<input type="submit" name="del" value="CANCEL">
<br>
</form>

<br>
    <p><a href="details.html">Back </a></p>
<br>
