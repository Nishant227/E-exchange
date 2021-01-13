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
      <center> <a href=""><img src="image/house/house2.jpg"  width="200" height="180" onclick>
      <h5><center>700ft2</a><h2>₹1999000 <h4>2bds 2bas </h4><h3>Jaipur</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/house/house3.jpg"  width="200" height="180">
             <h5>  <center>1000tf2</a><h2>₹6900000 <h4>3bds 3bas </h4><h3> Chennai</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/house/house4.jpg"  width="200" height="180">
            <h5><center>1100ft2</a><h2>₹5050000 <h4>3bds 3bas </h4><h3>Goa</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/house/house5.jpg"  width="200" height="180">
                <h5><center>600ft2</a><h2>₹2490000 <h4>1bd 1ba </h4><h3>Delhi</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/house/house6.jpg"   width="200" height="180">
             <h5><center>700ft2</a><h2>₹1519900 <h4>1bd 1ba </h4><h3>Lucknow</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/house/house7.jpg"  width="200" height="180">
            <h5><center>900ft2</a><h2>₹3549000 <h4>2bds 2bas </h4><h3>Delhi</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/house/house8.jpg"  width="200" height="180">
            <h5><center>1100ft2</a><h2>₹7297000 <h4>3bds 3bas </h4><h3>Mumbai</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/house/house9.jpg"  width="200" height="180">
            <h5><center>700ft2</a><h2>₹2680000 <h4>2bds 2bas </h4><h3>Jaipur</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

  <footer>

       <?php include "footer1.php"?>
     
     </footer>