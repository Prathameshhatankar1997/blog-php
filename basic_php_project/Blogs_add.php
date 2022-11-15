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
				<td align="center" >Title:<input type="text" name="title" class="input" placeholder="Blog title" size="39"></td>
		</tr>
		<tr>
			
			<td align="center">Content<br><textarea rows="15" cols="40" name="Content" class="input" placeholder="Blog content"></textarea></td>
		</tr>
		<tr>
			<td align="center">Upload Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="upload" id="title"></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="submit" value="upload here"></td>
		</tr>

</table>
</center>
	</form>

	</body>
</html>

        <?php
        include("connection2.php");

        error_reporting(0);

        $title=$_POST['title'];
        $content=$_POST['Content'];
        $filename=$_FILES["upload"]["name"];
        $tempname=$_FILES["upload"]["tmp_name"];
        $folder="Blogs/".$filename;
        move_uploaded_file($tempname,$folder);
        //print_r($_FILES["upload"]);
        echo  $filename;
  

         $query="INSERT INTO Blogs VALUES('','$title','$content','$folder')";

         $data=mysqli_query($conn,$query);

         if($data)

        {
         	echo "Inserted";
         }
         else
        {
         	echo "Failed to insert";
         }
        ?>