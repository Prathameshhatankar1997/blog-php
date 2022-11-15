<?php
include("connection2.php");
error_reporting(0);

$picsource=$_GET['pic'];

$query="DELETE FROM gallery WHERE id='$picsource'";


$data=mysqli_query($conn,$query);

if ($data) 
{
   echo "<script>alert('Photo deleted successfully')</script>";
   
 ?>
  <meta http-equiv="refresh" content="0 url=http://localhost/basic_php_project/gallery_photo_delete.php">
 <?php
}
else
{
	echo "failed to delete record";
}


?>
