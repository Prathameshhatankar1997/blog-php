<!DOCTYPE html>
<html>
<head>
	<title>right frame</title>
	<style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
		}
		a
		{
			font-family: sans-serif;
			color: white;
			text-decoration: none;
		}
		table
		{
			font-family: sans-serif;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<table border="0" width="100%" height="100">
		<tr>
			<td bgcolor="black" align="right" ><font color="white" size="10"><b>Welcome Admin</b></td>
		</tr>
	</table>
	<br>

	<table border="0" width="100%" height="170" cellspacing="8">
		<tr>
			<td bgcolor="red" rowspan="2" width="25%" align="center"><font color="white" size="8">Users<br>
				<?php
				include("connection2.php");

				error_reporting(0);

                 $query="SELECT * FROM login";

                 $data=mysqli_query($conn,$query);

                 $total=mysqli_num_rows($data);

                 if ($data!=0) //agar data zero nahi he OR data is not equal to zero
                 {
                 	echo $total;
                 }
                 else
                 {
                 	echo "Record not found";
                 }

                 ?></td>
			<td bgcolor="red" rowspan="2" width="25%" align="center"><font color="white" size="8">Gallery<br>
				<?php
				include("connection2.php");

				error_reporting(0);

                 $query="SELECT * FROM gallery";

                 $data=mysqli_query($conn,$query);

                 $total=mysqli_num_rows($data);

                 if ($data!=0) //agar data zero nahi he OR data is not equal to zero
                 {
                 	echo $total;
                 }
                 else
                 {
                 	echo "Record not found";
                 }
                 ?>
			</td>
			<td bgcolor="red" rowspan="2" width="25%" align="center"><font color="white" size="8">Blogs<br>
				<?php
				include("connection2.php");

				error_reporting(0);

                 $query="SELECT * FROM Blogs";

                 $data=mysqli_query($conn,$query);

                 $total=mysqli_num_rows($data);

                 if ($data!=0) //agar data zero nahi he OR data is not equal to zero
                 {
                 	echo $total;
                 }
                 else
                 {
                 	echo "Record not found";
                 }
                 ?>
			</td>
			<td bgcolor="green" width="25%" align="center"><a href="Change_password.php">Change Password</a></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="center"><a href="logout.php">LOGOUT</td>
			
		</tr>
	</table>

</body>
</html>