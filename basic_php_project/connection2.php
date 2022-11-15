<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

// to established connection
$conn=mysqli_connect("localhost","root","","test");

// connection create kare in sab ke bich me

if ($conn)  // agar connection successful hojaye to 
 {
	//echo "connection successful"; //print kar de
}
else
{
	echo "connection failed".mysql_connect_error();// ye apko bataye ga ki error kya he connection1 ke andar
}
?>