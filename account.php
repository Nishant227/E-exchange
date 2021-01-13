<html>
 <header>

 	<?php include "header.php"?>
 		
 	</header>
 	<style>
 		   *{
  box-sizing: ;
  
}

.column {
  float: left;
  width: 30%;
  padding: 15px;
  border:groove;
  margin:38px;
}

/* Clearfix (clear floats) */
.row::after {
  content: " ";
  clear: both;
  display: table;
  border:groove;
}
div a:hover{
      padding:25px;
      color:white;
    }
    p{
    	color:grey;
    }

 	</style>
<body  background="image/back.jpg">
    <div class="row">
             
     <div class="column">
      <center> <a href="">
             <h3>  <justify> Your Order's</h3></a>
             	<p>Track,return,or buy things </p>
    </div> 
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Login & security</h3></a>
             	<p >Edit login,name,and mobile number</p>
    </div>
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Your addresses</h3></a>
             	<p>Edit addresses for orders </p>
    </div>  
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Payment option</h3></a>
             	<p>Edit or add payment methods</p>
    </div> 
	</div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>