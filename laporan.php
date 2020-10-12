<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>

  <main class="bd-masthead text-center" id="content"><br/>
    <h1>REPORT</h1>
    <p class="lead">REPORT DETAILS.</p>
	<hr/>
<p>
Boosterpos apps free version just support using sale list report only, if you need inventori report and income profit detail you can upgrade to premium version with cheap price , order boosterpos web apps + website landing page + free domain name and hosting + including boosterpos web app full version.
</p>
</main class="text-center">
<div class="masthead-followup row m-0 border border-white text-center">
<div class="col-12 col-md-12 p-3 p-md-5 bg-warning text-white border border-white">
    <a href="lapjual.php" class="text-white">
   	<h3>PROFIT</h3>
	<img src="img/penjualan.png">
    <p>
Check profit income.
    </p>
    </a>
  </div>
  </div>
  <div class="masthead-followup row m-0 border border-white text-center">
    <div class="col-12 col-md-6 p-3 p-md-5 bg-info text-white border border-white">
    <a href="lapstok.php" class="text-white">
   <h3>STOK</h3>
	 <img src="img/stok.png">
    <p>Inventrori management report.</p>
</a>
  </div>

      <div class="col-12 col-md-6 p-3 p-md-5 bg-danger text-white border border-white">
      <a href="lappembayaran.php" class="text-white">
    <h3>PAYMENT</h3>
	<img src="img/bayar.png" class="text-white">
    <p>List Payment Report.</p>
  </a>
  </div>	
  

</div>



<?php require_once 'includes/footer.php'; ?>