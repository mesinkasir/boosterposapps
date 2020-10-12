<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>

  <main class="bd-masthead text-center" id="content"><br/>
    <h1>REPORT</h1>
    <p class="lead">Inventori stock Management.</p>
	<hr/>
	
</main> <div class="container text-center">

  <a href="cekstok.php">
          <div class="col-12 col-md-6 bg-warning">
            <h2 class="featurette-heading">CEK STOCK</h2>
			<img src="img/stok.png">
			<p><span class="text-muted">Cek Stock Quantity.</span></p>
                   </div>
				   </a>
				   <a href="price.php">
          <div class="col-12 col-md-6 bg-info">
            <h2 class="featurette-heading">PRICE LIST</h2>
			<img src="img/list.png">
			<p><span class="text-muted">Cek price list product.</span></p>
          </div>
		  </a>





<?php require_once 'includes/footer.php'; ?>