<?php
require_once 'includes/header.php'; 
require 'functions.php';
$data = query ("SELECT * FROM `product` ORDER BY `product`.`quantity` ASC ");
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>
 <main class="bd-masthead text-center" id="content"><br/>
    <h1>VIDEO</h1>
    <p class="lead">VIDEO TUTORIAL</p>
	<hr/>
</main>

<table>
			<div id="success-messages"></div>
			
			<table class="table" id="manageOrderTable">
				<thead>
					<tr class="bg-primary text-white">
						<th style="width:5%;">No.</th>
						<th style="width:30%;">Tutorial Manual</th>
						<th style="width:10%;"></th>
					</tr>
				</thead>
			

		
				<thead>
					<tr >
						<th style="width:5%;">01.</th>
						<th style="width:30%;"> First Login</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/Mkkwcf8gcEA" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">02.</th>
						<th style="width:30%;">Create Group / Branch Product </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/ao-QGzrgfio" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">03.</th>
						<th style="width:30%;"> Create Categories Product</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/VT5B36lj8NQ" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">04.</th>
						<th style="width:30%;"> Register New Product</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/eSEOjqKxscs" target="blank"class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">05.</th>
						<th style="width:30%;"> Cash Transaction</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/A1smvkXLD7I" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">06.</th>
						<th style="width:30%;"> Credit Transaction</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/x8CQPeSJKiM" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">07.</th>
						<th style="width:30%;"> Down payment Transaction</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/KAIrxtjiw-Y" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">08.</th>
						<th style="width:30%;"> Credit Payment</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/QWFFy7rq3eQ" target="blank"class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">09.</th>
						<th style="width:30%;">Check Stock Inventori</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/uJWYfxuxWCs" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">10.</th>
						<th style="width:30%;"> Check price list produk</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/M2_N6m90Dh4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">11.</th>
						<th style="width:30%;"> Check cash transaction</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/XlZepeEJmQk" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">12.</th>
						<th style="width:30%;">Check credit report with payment </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/PH0hc-rGK5k" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">13.</th>
						<th style="width:30%;"> Check Outstanding Payment</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/GciBhqXndGc" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">14.</th>
						<th style="width:30%;"> List Sale details</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/0JlKwWeqc4I" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">15.</th>
						<th style="width:30%;">Income profit report </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/PtaDgQwnQw0" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">16.</th>
						<th style="width:30%;">Setting configuration </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/_v_s-PT5D00" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">17.</th>
						<th style="width:30%;"> Update your website.</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/4ezI-Bg3VAQ" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">18.</th>
						<th style="width:30%;"> Update product online shop </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/DulKpXWrN2Q" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">19.</th>
						<th style="width:30%;">Backoffice Dashboard </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/7vLqWVRuIos" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">20.</th>
						<th style="width:30%;">Tutorial Menu </th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/kboj7-KpdRI" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">21.</th>
						<th style="width:30%;"> Shut Down & log out</th>
						<th style="width:10%;"><a href="https://www.youtube.com/embed/Y8MMf4vjFsk" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					
					
					
					
					
				</thead>
				



</table>
</main>
<?php require_once 'includes/footer.php'; ?>