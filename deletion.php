<?php
include_once 'connection.php';
if(isset($_POST['delete']))
{	 
	 
    $o_CID = $_POST['CID'];
     $sql2 = "DELETE FROM customers WHERE CID= '$o_CID'";
     
if (mysqli_query($conn, $sql2)) {
		echo " Cancelled !";
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
    <p><a href="front.html">Back to front</a></p>
     <br>

</body>
</html>










