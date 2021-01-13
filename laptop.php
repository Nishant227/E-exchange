<html>
 <header>

  <?php include "header.php"?>
    
  </header>
<body>
  <style>
    *{
  box-sizing: ;
}

.column {
  float:center;
  width: 95%;
  height: 30%;
  padding: 15px;
  border-bottom: 2px solid grey;
  margin: 8px;
}

/* Clearfix (clear floats) */
.row::after {
  float: left;
  content: "";
  clear: both;
  display: table;
  
}
div a:hover{
      padding:25px;
    }
    h5{
      float:right;
    }
    

</style>
<div class="row">
   <div class="column">
      <center> <a href=""><img src="image/laptop/laptop2.jpg"  width="200" height="180" onclick>
      <h5><center>Apple</a><h2>₹19990 <h4>2017 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/laptop/laptop3.jpg"  width="200" height="180">
             <h5>  <center>HP</a><h2>₹6900 <h4>2010 </h4><h3> With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/laptop/laptop4.jpg"  width="200" height="180">
            <h5><center>HP</a><h2>₹20500 <h4>2015 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/laptop/laptop5.jpg"  width="200" height="180">
                <h5><center>Acer</a><h2>₹14900 <h4>2015 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/laptop/laptop6.jpg"   width="200" height="180">
             <h5><center>Dell</a><h2>₹15199 <h4>2016 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/laptop/laptop7.jpg"  width="200" height="180">
            <h5><center>HP</a><h2>₹15490 <h4>2015 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/laptop/laptop8.jpg"  width="200" height="180">
            <h5><center>Lenovo</a><h2>₹12970 <h4>2013 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/laptop/laptop9.jpg"  width="200" height="180">
            <h5><center>HP</a><h2>₹16800 <h4>2016 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

  <footer>

       <?php include "footer1.php"?>
     
     </footer>