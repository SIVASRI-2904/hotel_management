<?php
include_once 'connection.php';
if(isset($_POST['del']))
{	 
	 
    $o_CID = $_POST['CID']; 
     $sql1="DELETE FROM payment WHERE CID='$o_CID'";
     $sql2 = "DELETE FROM booking WHERE CID= '$o_CID'";
      
 if (mysqli_query($conn, $sql1)) {
		echo "booking Cancelled !";
	 } else {
		echo "Error: " . $sql1 . "
" . mysqli_error($conn);
   	 }
if (mysqli_query($conn, $sql2)) {
		echo "booking Cancelled !";
	 } else {
		echo "Error: " . $sql2 . "
" . mysqli_error($conn);
   
	 }

	 mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<br>
    <p><a href="details.html">Back to details</a></p>
    <br>
    <p><a href="payment.html">back to payment</a></p>
    <br>
    <p><a href="front.html">Back to front page</a></p>
     <br>

</body>
</html>
