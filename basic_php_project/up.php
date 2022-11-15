<?php
include("connection2.php");

error_reporting();
        $id=$_GET['pic'];
        $title=$_GET['title'];
        $content=$_GET['Content'];
        $file=$_GET['upload'];
 echo $file;       



?>

<!DOCTYPE html>
<html>
<head>
	<title>Blogs add</title>
	<style type="text/css">
		table
		{
			font-family: sans-serif;
			font-size: 20px;
			background: transparent;
			background-color: rgba(0,0,0,0.6);
			color: white;
		}
		.input
		{
			background-color: gray;
			color: white;
			border:0;
			outline: 0;
		}

	</style>
</head>
<body bgcolor="red">
	<form method="POST" enctype="multipart/form-data">
		<br>
		<br>
		<br>
		<br>
<center>
		<table border="0" cellspacing="10" cellpadding="2">
			<tr>
				
			<td align="center"><font color="yellow" size="6"><h4>ADD YOUR BLOGS</h4></td>
		</tr>
		<tr>
				<td align="center" >Title:<input type="text" name="pic" value="<?php echo "$id"; ?>" class="input"  size="39"></td>
		</tr>
			<tr>
				<td align="center" >Title:<input type="text" name="title" value="<?php echo "$title"; ?>" class="input"  size="39"></td>
		</tr>
		<tr>
			
			<td align="center">Content<br><textarea rows="15" cols="40"  value="<?php echo "$content"; ?>" name="Content" class="input"><?php echo $content; ?></textarea></td>
		</tr>
		<tr>
			<td align="center">Upload Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="upload"  value="<?php echo "$file"; ?>" id="title"><?php echo $file; ?></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="submit" value="submit"></td>
		</tr>

</table>
</center>
	</form>
     <?php
     if (isset($_POST['submit'])) 
     {
      $title=$_POST['title'];
        $content=$_POST['Content'];
        $file=$_POST['upload'];
         $filename=$_FILES["upload"]["name"];
        $tempname=$_FILES["upload"]["tmp_name"];
        
        $target_dir = "Blogs/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
    {
        $sql="UPDATE blogs SET Title='$title', Content='$content',file='$file' WHERE id='$id'";
        if(mysqli_query($conn,$sql))
        {
            header('location:Blogs_update.php');
        }
        else 
        {
            echo 'not updated';
        }
    }
}
?>

</body>
</html>