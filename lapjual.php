<?php
require_once 'includes/header.php'; 
require 'functions.php';
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>

  <main class="bd-masthead text-center" id="content"><br/>
    <h1>PROFIT</h1>
    <p class="lead">Profit Income Report.</p>
	<hr/>
</main> <div class="container text-center">

  <a href="listjual.php">
          <div class="col-md-6 bg-info">
            <h2 class="featurette-heading">SALES LIST</h2>
			<img src="img/list.png">
			<p><span class="text-muted">Sales List report.</span></p>
                   </div>
				   </a>
				   <a href="report.php">
          <div class="col-md-6 bg-warning">
            <h2 class="featurette-heading">PROFT INCOME</h2>
			<img src="img/cash.png">
			<p><span class="text-muted">Profit income report.</span></p>
          </div>
		  </a>
        </div>



<?php require_once 'includes/footer.php'; ?>