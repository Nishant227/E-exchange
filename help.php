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
  width: 23%;
  padding: 15px;
  border:groove;
  margin:30px;
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
             	<p>Track , return , <br>or buy things </p>
    </div> 
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Returns & refund</h3></a>
             	<p >Return or replace items,
              Print return mailing labels</p>
    </div>
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Manage addresses</h3></a>
             	<p>Update your addresses add or edit address details </p>
    </div>  
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Payment Setting</h3></a>
             	<p>Add or edit payment methods, edit expired debit, credit card </p>
    </div> 
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Account Setting</h3></a>
              <p>Change your email,password ,update login information</p>
    </div>
    <div class="column">
      <center> <a href="">
             <h3>  <justify> Digital Service and Support</h3></a>
              <p>Find device help & support ,Troubleshoot device issues</p>
    </div>
	</div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>