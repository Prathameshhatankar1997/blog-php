<!DOCTYPE html>
<html>
<head>
	<title>adding photo into the galley</title>
	<style type="text/css">
		#title
		{
			font-family: sans-serif;
			color: green;
		}
		#choose
		{
			font-family: sans-serif;
			font-size: 20px;
			color: red;
		}
		#btn
		{
			color: blue;
		}
		a
		{
		
		    color: white;
		    height: 20px;
		    text-decoration: none;
		}
		#Upload:hover
		{
          background-color: pink;
        }
        a:hover
        {
         color: green;
        }
        #Upload
        {
        	border-radius: 10px;
        }
	</style>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<table border="0" cellspacing="10" cellpadding="10">
		<tr>
           <td align="center" id="title" colspan="2"><h1><u>Select a photos which you want to add</u></h1></td>
         </tr>
         <tr>    
	<td id="choose">Choose a photos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="file" name="Uploads" ></td><td bgcolor="orange" id="Upload"><input type="submit" name="submit" value="Upload Here"></td>
</tr>
</table>
</center>
</form>
</body>
</html>

<?php
include("connection2.php");
error_reporting(0);


//print_r($_FILES["Uploads"]);
echo "<br>";
$filename=$_FILES["Uploads"]["name"];
$tempname=$_FILES["Uploads"]["tmp_name"];
$folder="gallery/".$filename;
move_uploaded_file($tempname,$folder);

echo $folder;

if ($filename!="") // agar filename empty nahi he to 
{
	$query="INSERT INTO gallery VALUES ('','$folder')";
	$data=mysqli_query($conn,$query);

	if ($data) 
	{
		echo "Inserted";
	}
    else
    {
    	echo "not inserted";
    }

}

?>