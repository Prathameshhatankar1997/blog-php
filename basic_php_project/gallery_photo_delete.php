<!DOCTYPE html>
<html>
<head>
	<title>fetch delete photos </title>
</head>
<body>
<table border="2">
	<tr>
		<th>Picsource</th>
		<th>Operation</th>
	</tr>





<?php
include("connection2.php");

error_reporting(0);
 

$query="SELECT * FROM gallery";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);


if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
		<td><img src ='".$result['picsource']."' height=100 width=100></td>
		<td align='center'><a href='delete_photo.php?pic=$result[id]' onclick='return checkdelete()'><input type='submit' value='DELETE'</td>
		</tr>";
	}

}
else
{
	echo "No records found";
}
?>
</table>
<script type="text/javascript">
	function checkdelete() 
	{
	  return confirm('Are you sure you want to delete this photo');
	}
</script>
</body>
</html>

