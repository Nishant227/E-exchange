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
      <center> <a href=""><img src="image/car/car2.jpg"  width="200" height="180" onclick>
      <h5><center>Suzuki</a><h2>₹499000 <h4>2016 </h4><h3>5000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/car/car3.jpg"  width="200" height="180">
             <h5>  <center>Mahindra</a><h2>₹699000 <h4>2017 </h4><h3> 7000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/car/car4.jpg"  width="200" height="180">
            <h5><center>Suzuki</a><h2>₹625000 <h4>2015 </h4><h3>2500km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/car/car5.jpg"  width="200" height="180">
                <h5><center>Toyota</a><h2>₹549000 <h4>2014 </h4><h3> 13000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/car/car6.jpg"   width="200" height="180">
             <h5><center>MG</a><h2>₹1199000 <h4>2019 </h4><h3>3000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/car/car7.jpg"  width="200" height="180">
            <h5><center>Tata</a><h2>₹349000 <h4>2015 </h4><h3>15000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/car/car8.jpg"  width="200" height="180">
            <h5><center>Audi</a><h2>₹697000 <h4>2012 </h4><h3>30000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/car/car9.jpg"  width="200" height="180">
            <h5><center>Hundai</a><h2>₹748000 <h4>2017 </h4><h3>25000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

  <footer>

       <?php include "footer1.php"?>
     
     </footer>