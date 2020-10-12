<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>

  <main class="bd-masthead text-center" id="content"><br/>
    <h1>PAYMENT</h1>
    <p class="lead">Payment report details .</p>
	<hr/>
</main>
<div class="text-center">
   <a href="cash.php" class="text-white">
 <div class="col-12 col-md-4 p-3 p-md-5 bg-success text-white border border-white">
	 <h3>CASH</h3>
	 <img src="img/cash.png">
    <p>Cash Payment Transaction.</p>
  </div>
  </a>
     <a href="cicilan.php">
  <div class="col-12 col-md-4 p-3 p-md-5 bg-danger text-white border border-white">
    <h3>CREDIT</h3>
	<img src="img/cicil.png">
    <p>Credit Payment Transaction.</p>
  </div>	
  </a>
  
 <a href="belumterbayar.php" class="text-white">
   <div class="col-12 col-md-4 p-3 p-md-5 bg-info text-white border border-white">
   	<h3>NON</h3>
	<img src="img/cicilan.png">
    <p>
Outstanding Payment.
    </p>
  </div></a>
  </div>



<?php require_once 'includes/footer.php'; ?>