<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
			background-size: cover;
        }
		table
		{
			font-family: sans-serif;
			background-color: black;
			border:5px solid white;
			border-radius: 20px;
			background: rgba(0,0,0,0.3);
		}
		.type
		{
			width: 300px;
			height: 40px;
		     border:0;
		     outline:0;
		     border-bottom: 3px solid white;
             background: transparent;
             color: white;
		}
		input::-webkit-input-placeholder
		{
			color: white;
		}
		#btn
		{
			width: 150px;
			color: white;
			background-color: green;
			height: 30px;
		}
		#btn:hover
		{
			background-color: orange;
		}
		#link
		{
			color: white;
			font-family: sans-serif;
		}
		#link:hover
		{
          color: orange;
		}
	</style>
</head>
<body background="20160307_001132-1.jpg">
<form method="POST">
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<table border="0" cellspacing="30" width="350">
		<tr>
			<td align="center"><img src="20170827_103858.jpg" id="pic" width="100" height="100"></td>
		</tr>
		<tr>
			<td ><input type="text" name="user" placeholder="User-ID" class="type"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Password" class="type"></td>
		</tr>
		<tr>
			<td align="center"><a href="New_registration.php" id="link">New Registration</a></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="submit" value="login" id="btn"></td>
		</tr>
	</table>
</center>
</form>
</body>
</html>

<?php
include("connection2.php");

error_reporting(0);

echo "<br>";

session_start();
  
  $email=$_POST['user'];
  $pass=$_POST['password'];

 

$query="SELECT * FROM login WHERE User_id='$email' && Password='$pass'";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

if($total==1)
{
	//echo $total;
	$_SESSION['log']=$email;
	 header('location:frame.php');
	echo $email;
}
else
{
	echo "Failed to login";
}

?>






