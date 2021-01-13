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
			Type* <br>
			<input list="type" name="type">
			<datalist id="type">
				<option value="Apartments">
				<option value="Builder Floors">
				<option value="farm house">	
				<option value="Houses">
				<option value="Villa">
				<option value="other">
				</datalist><br>
				<br>


				
			Bedrooms* <br>
			<input list="bed" name="bed">
			<datalist id="bed">
			<option value="1">
			<option value="2">
			<option value="3">
			<option value="4">
			<option value="4+">
			</datalist><br><br>
			Bathrooms* <br>
			<input list="bath" name="bath">
			<datalist id="bath">
			<option value="1">
			<option value="2">
			<option value="3">
			<option value="4">
			<option value="4+">
			</datalist><br>
			<br>
			Furnishing* <br>
			<input list="fur" name="fur">
			<datalist id="fur">
			<option value="Furnished">
			<option value="Semi-Furnished">
			<option value="Unfurnished">
			</datalist><br>
			<br>
			Construction Status* <br>
			<input list="fur" name="fur">
			<datalist id="fur">
			<option value="New launch">
			<option value="Ready to move">
			<option value="Under Construction">
			</datalist><br>
			<br>
			Super Builtup Area(ft)<br><input type="text" name="area"><br>
			<br>
			Carpet Area(ft)<br><input type="text" name="carea"><br><br>
			AD Title* <br>
			<textarea name="ad" rows="5" cols="22"></textarea><br>
				<br><br>
			Description* <br>
			<textarea name="des" rows="10" cols="22"></textarea><br>
				<br><br>
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