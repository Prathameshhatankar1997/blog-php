<!DOCTYPE html>
<html>
<head>
	<title>fetch update blogs </title>
</head>
<body>
<table border="0" align="center" width="600" cellspacing="10">
	<tr>
		<td align="center" colspan="3"><font size="5">BLOGS</td>
	</tr>

<?php
include("connection2.php");

error_reporting();
 

$query="SELECT * FROM Blogs";

$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);


if($total!=0)
{
	while ($result=mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
        <td align='center'>".$result['Title']."<br><img src ='".$result['file']."' height=200 width=200></td>
        <td align='justify'>".$result['Content']."</td>
		<td align='center'><a href='up.php?pic=$result[id] & upload=$result[file]&title=$result[Title]&Content=$result[Content]'><input type='submit' value='Update'></td>
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
	function checkupdate() 
	{
	  return confirm('Are you sure you want to Update this blog');
	}
</script>
</body>
</html>
