<?php
 if(isset($_FILES["image"]))
 {

 	//print_r($_FILES);
 	$file_tmp=$_FILES["image"]["tmp_name"];
 	$file_name=$_FILES["image"]["name"];
 	$file_size=$_FILES["image"]["size"];
 	$file_type = $_FILES['image']['type'];
 	$file_store="image/car/".$file_name;
 	move_uploaded_file($file_tmp,$file_store);
 	
 	
 }
?>

<header>
	<?php include "header.php"?>
</header>
<html>
<style>
	div{
	  background-color: #E8E8E8;
	  width: 50%;  		
   	  border-radius: 12px;
   	  border: 1px solid grey;

	}
</style>
<body background="image/back.jpg">
	<center>
		<h1>POST YOUR AD</h1>
		<div>
			<left>
			<h2 style="text-decoration: underline;  ">Selected Category</h2></left>
		
			<h2>Include Some Details</h2>
		<form action="" method="post" enctype="multipart/form-data">
			
			AD Title* <br>
			<textarea name="ad" rows="5" cols="22"></textarea><br>
				<br>
			Description* <br>
			<textarea name="des" rows="10" cols="22"></textarea><br>
				<br>
			<h3>Set A Price* <br>
			<input type="text" name="price"><br></h3>
			<h3>Upload Upto 5 Photos* </h3>
			<input type="file" name="image"><br>
		    <br><br>

		    <p>* Compulsory details</p>


			<input type="submit" name="post">



		</form>
	</div>
</body>
</html>
<footer> 
	<?php include "footer1.php"?>
</footer>