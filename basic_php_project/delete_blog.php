<?php
include("connection2.php");

error_reporting(0);

 
 $title=$_GET['pic'];




$query="DELETE FROM Blogs WHERE id='$title'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Blog delete successfully')</script>";
   
 ?>
  <meta http-equiv="refresh" content="0 url=http://localhost/basic_php_project/Blogs_delete.php">
 <?php
}
else
{
	echo "failed to delete record";
}


?>