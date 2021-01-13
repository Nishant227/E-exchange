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
      <center> <a href=""><img src="image/mobile/mobile2.jpg"  width="200" height="180" onclick>
      <h5><center>Apple</a><h2>₹19990 <h4>2017 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/mobile/mobile3.jpg"  width="200" height="180">
             <h5>  <center>Samsung</a><h2>₹20900 <h4>2017 </h4><h3> With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/mobile/mobile4.jpg"  width="200" height="180">
            <h5><center>Samsung</a><h2>₹2500 <h4>2015 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/mobile/mobile5.jpg"  width="200" height="180">
                <h5><center>One Plus</a><h2>₹24900 <h4>2019 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/mobile/mobile6.jpg"   width="200" height="180">
             <h5><center>Samsung</a><h2>₹3199 <h4>2016 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/mobile/mobile7.jpg"  width="200" height="180">
            <h5><center>Samsung</a><h2>₹1490 <h4>2015 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/mobile/mobile8.jpg"  width="200" height="180">
            <h5><center>Vivo</a><h2>₹2970 <h4>2018 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/mobile/mobile9.jpg"  width="200" height="180">
            <h5><center>MI</a><h2>₹1800 <h4>2016 </h4><h3>With Bill</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

  <footer>

       <?php include "footer1.php"?>
     
     </footer>