<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	
    $CID=$_POST['cid']; 
    $name=$_POST['name'];
    $doorno=$_POST['doorno'];
    $city=$_POST['city'];
    $contno=$_POST['contno'];
    
     
$sql = "INSERT INTO customers(cid,cname,doorno,city,cphn)
VALUES('$CID','$name','$doorno','$city','$contno')";



 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
 }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<br>
    <p><a href="details.html">Back </a></p>
<br>
    <p><a href="payment.html"> NEXT</a></p>
<br>
<h3>FOR DELETING</h3>
<br>
<form method="post" action="deletion.php">
<P>
<label for="customer id">CUSTOMER ID:</label>
<input type="text" name="CID"></P>  
<br>
<input type="submit" name="delete" value="CANCEL">
<br>
</form>


</body>
</html>

