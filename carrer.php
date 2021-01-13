
 	<header>

 	<?php include "header.php"?>
 		
 	</header>
<html>
 <body background="image/back.jpg">
 	<center>
 	<style>
 	div{
	  background-color: #E8E8E8;
	  width: 50%;  		
   	  border-radius: 12px;

	}
 	</style>
<div>

	<form action="insertc.php" method="post">

		<h2> Welcome To E-Exchange Carrer's</h2>
		
		NAME: <input type="text" name="name" color: white><br><br>
		Email: <input type="text" name="email"><br><br>
		CONT.: <input type="text" name="cont"><br><br>
		Skills: <input type ="text" name="skills"><br><br>
		Job Profile: <input type ="text" name="job"><br><br>
		Experience*: <input type ="text" name="year"><br><br>
		PRE JOB*: <input type ="text" name="cname"><br><br>
		<input type="submit" name="save"><br><br>
	</form>

</div>
<p>* If any</p>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>