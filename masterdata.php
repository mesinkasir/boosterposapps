<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>

  <main class="bd-masthead text-center" id="content"><br/>

    <h1>DATABASED</h1>
    <p class="lead">MASTER PRODUCT DATABASED.</p>
	<hr/>

</main>
<div class="masthead-followup row m-0 border border-white text-center">
  <div class="col-12 col-md-4 p-3 p-md-5 bg-success text-white border border-white">
  <a href="brand.php" class="text-white">
	 <h3>BRAND</h3>
	 <img src="img/merk.png">
    <p>Input group or brand product.</p>
    </a>
  </div>

      <div class="col-12 col-md-4 p-3 p-md-5 bg-danger text-white border border-white">
      <a href="categories.php" class="text-white">
    <h3>CATEGORIES</h3>
	<img src="img/kategori.png">
    <p>Input categories of product.</p>
</a>
  </div>	

  
   <div class="col-12 col-md-4 p-3 p-md-5 bg-info text-white border border-white">
   <a href="product.php" class="text-white">
   	<h3>PRODUCT</h3>
	<img src="img/produk.png">
    <p>
Register your product in here.
    </p>
    </a>  </div>
</div>


<?php require_once 'includes/footer.php'; ?>