
<!DOCTYPE html>
<html>
<head>
	<title>MAIN FRAME</title>
</head>

<frameset cols="14%,*"  noresize border="none">
	
	<frame src="left_frame.php" name="left"></frame>
	<frame src="right_frame.php" name="right"></frame>
</frameset>

</html>

<?php


 session_start();

 

 $email=$_SESSION['log'];
 if ($email == true) 
 {
 	

 }
 else
 {

 	header('location:login_page.php');
 }

?>

