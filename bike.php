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
      <center> <a href=""><img src="image/bike/bike2.jpg"  width="200" height="180" onclick>
      <h5><center>KTM</a><h2>₹49900 <h4>2017 </h4><h3>5000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/bike/bike3.jpg"  width="200" height="180">
             <h5>  <center>Hero</a><h2>₹29000 <h4>2017 </h4><h3> 70000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/bike/bike4.jpg"  width="200" height="180">
            <h5><center>Hero</a><h2>₹25000 <h4>2015 </h4><h3>25000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/bike/bike5.jpg"  width="200" height="180">
                <h5><center>Royal Enfield</a><h2>₹54900 <h4>2014 </h4><h3> 13000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/bike/bike6.jpg"   width="200" height="180">
             <h5><center>Honda</a><h2>₹31990 <h4>2014 </h4><h3>30000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/bike/bike7.jpg"  width="200" height="180">
            <h5><center>KTM</a><h2>₹54900 <h4>2015 </h4><h3>15000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/bike/bike8.jpg"  width="200" height="180">
            <h5><center>Yamaha</a><h2>₹6970 <h4>2000 </h4><h3>90000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/bike/bike9.jpg"  width="200" height="180">
            <h5><center>Hero</a><h2>₹18000 <h4>2012 </h4><h3>25000km</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

  <footer>

       <?php include "footer1.php"?>
     
     </footer>