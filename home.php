<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>
<p class="text-center">Boosterpos solutions web based app point of sale</p>
<div class="text-center">
    <div class="col-12 col-md-4 p-3 p-md-5 bg-info text-white border border-white">
    <a href="masterdata.php" class="text-white">
   <h3>PRODUCT</h3>
	 <img src="img/merk.png">
    <p>Register & Create Product.</p>
    </a>
  </div>
  
  <div class="col-12 col-md-4 p-3 p-md-5 bg-danger text-white border border-white">
  <a href="orders.php?o=add" class="text-white">
    <h3>P.O.S</h3>
	<img src="img/penjualan.png">
    <p>Point of Sale menu.</p>
    </a>
  </div>	
  
  
   <div class="col-12 col-md-4 p-3 p-md-5 bg-success text-white border border-white">
   <a href="listjual.php" class="text-white">
   	<h3>Transacation</h3>
	<img src="img/trans.png">
    <p>
Cek transaction payment.
    </p>
    </a>
  </div>

 <div class="col-12 col-md-2 p-3 p-md-5 bg-warning text-white border border-white">
 <a href="lapstok.php" class="text-white">
	 <h3>STOCK</h3>
	 <img src="img/stok.png">
    <p>Inventori Management Report.</p>
    </a>
  </div>
  
  <div class="col-12 col-md-2 p-3 p-md-5 bg-success text-white border border-white">
  <a href="lappembayaran.php" class="text-white">
    <h3>PAYMENT</h3>
	<img src="img/bayar.png">
    <p>All payment report details.</p>
    </a>
  </div>	
     <div class="col-12 col-md-2 p-3 p-md-5 bg-info text-white border border-white">
   <a href="lapjual.php" class="text-white">
   	<h3>PROFIT</h3>
	<img src="img/cash.png">
    <p>
Profit income report details.
    </p>
    </a>
  </div>
 <div class="col-12 col-md-2 p-3 p-md-5 bg-warning text-white border border-white">
 <a href="set.php" class="text-white">
	 <h3>SETTING</h3>
	 <img src="img/seting.png">
    <p>Configure and setting this app.</p>
    </a>
  </div>
  
  <div class="col-12 col-md-2 p-3 p-md-5 bg-danger text-white border border-white">
  <a href="dashboard.php" class="text-white">
    <h3>OFFICE</h3>
	<img src="img/office.png">
    <p>Backoffice dashboard admin.</p>
    </a>
  </div>	
  
  
<div class="col-12 col-md-2 p-3 p-md-5 bg-warning text-white border border-white">
  <a href="logout.php" class="text-white">
   	<h3>SHUT DOWN</h3>
	<img src="img/off.png">
    <p>
Log out from boosterpos apps.
    </p>
    </a>
  </div>
</div>

<?php require_once 'includes/footer.php'; ?>