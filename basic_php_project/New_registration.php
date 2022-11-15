<?php 
 //                     POST method me hamara pura data secure hota he wo url me nahi dekhai dega  
// abhi hame form ke sath connection karna he
include("connection2.php"); //data ko database me store karne keliye connection file ko include ki ya he
error_reporting(); //screen pe error dikha ne ki liye
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
          width: 100px;
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
			<div id="heading"><td colspan="2" align="center"><h1>Registration Form</h1></td></div>
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
			
			<td colspan="2" align="center"><input type="submit" name="submit_details" value="submit details" placeholder="Enter again Password" required id="btn"></td>
		</tr>
	</table>
</center>
</form>
</body>
</html>

<?php
//echo "<h1>inserting data by using POST method</h1>";
//echo "<h3>Here your data is secure means your entered data is not visible in url </h3>";

$em=$_POST['email'];
$ps=$_POST['Password'];


//                 this is just to check connection with database
echo "$rn";
// echo "$fn";
echo "$ln";
// echo "$em";      this is only for testing whether all the variable values are getting from form or not   
echo "$ps";
// echo "$cp";

//   now to make a connection with table
$query="INSERT into login VALUES('','$em','$ps')";

// now to execute query
$data=mysqli_query($conn,$query);
//mere query ko chala ("connection ko check kar" or uske sath sath "query ko chala de" )


// so connection established hojaye to mere query ko insert karade
if($data)  //  agar $data chal pada to 
{
	echo "Data inserted into database";   // print kar de
}
else //agar $data nahi chal pada to
{
	echo "failed to insert data into database";// ye print kara de
}

?>