<?php 
 //                     POST method me hamara pura data secure hota he wo url me nahi dekhai dega  
// abhi hame form ke sath connection karna he
include("connection2.php"); //data ko database me store karne keliye connection file ko include ki ya he
error_reporting(0); //screen pe error dikha ne ki liye
                    // agar ek bhi error nahi dikha na he to (o) zero kar de
?>


<!DOCTYPE html>
<html>
<head>
	<title>students registration form</title>
	<style type="text/css">
		.input
		{
          font-family: sans-serif;
          width: 200px;
          height: 25px;
          background-color: yellow;
          border-radius: 10px;
          border:none;
		}
		#heading
		{
			font-family: sans-serif;
			text-align: center;
		}
		table
	
		{
			font-family: sans-serif;
			color: white;
			border-radius: 10px;
			background: gray;
		}
		#btn
		{
          background: blue;
          color: white;
          font-family: sans-serif;
          width: 140px;
          height: 40px;
          border:none;
          border-radius: 10px;
		}
		#btn:hover
		{
			background: orange;
		}
		
	</style>
</head>
<body bgcolor="red">
<form method="POST">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center>
	<table border="0" cellspacing="10" cellpadding="5">
		<tr>
			<div id="heading"><td colspan="2" align="center"><h1>Change Password</h1></td></div>
		</tr>
		
		<tr>
			<td>User-ID</td>
			<td><input type="text" name="email" placeholder="Enter Email id" class="input"required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="Password" placeholder="Password" class="input" value="" required></td>
		</tr>
		
		<tr>
			
			<td colspan="2" align="center"><input type="submit" name="submit_details" value="Update Password" placeholder="Enter again Password" required id="btn"></td>
		</tr>
	</table>
</center>
</form>
</body>
</html>


<?php

 $id=$_POST['email'];
 $pwd=$_POST['Password'];

$query="UPDATE login SET Password='$pwd' WHERE User_id='$id'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Password Updated')</script>";
   //echo "updated successfully";
}
else
{
	echo "failed to update";
}


?>

