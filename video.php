<?php
require_once 'includes/header.php'; 
require 'functions.php';
$data = query ("SELECT * FROM `product` ORDER BY `product`.`quantity` ASC ");
//$sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE payment_status = 1";
?>
 <main class="bd-masthead" id="content"><br/>
<center>
    <h1>VIDEO</h1>
    <p class="lead">VIDEO MANUAL TUTORIAL</p>
	<hr/>
	</center>
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
						<th style="width:30%;"> Login dan menu awal</th>
						<th style="width:10%;"><a href="vd/1 login.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">02.</th>
						<th style="width:30%;">Pembuatan data merk produk </th>
						<th style="width:10%;"><a href="vd/2 merk.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">03.</th>
						<th style="width:30%;"> Membuat Kategori produk</th>
						<th style="width:10%;"><a href="vd/3 kategori.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">04.</th>
						<th style="width:30%;"> Membuat dan memasukan data produk</th>
						<th style="width:10%;"><a href="vd/4 produk.mp4" target="blank"class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">05.</th>
						<th style="width:30%;"> Transaksi penjualan cash</th>
						<th style="width:10%;"><a href="vd/5 cash.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">06.</th>
						<th style="width:30%;"> Transaksi penjualan dengan kredit / cicilan</th>
						<th style="width:10%;"><a href="vd/6 kredit.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">07.</th>
						<th style="width:30%;"> Transaksi penjualan dengan tempo</th>
						<th style="width:10%;"><a href="vd/7 tempo.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">08.</th>
						<th style="width:30%;"> Transaksi pembayaran cicilan / piutang kredit</th>
						<th style="width:10%;"><a href="vd/8 bayar.mp4" target="blank"class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">09.</th>
						<th style="width:30%;">Cek laporan stok persediaan produk</th>
						<th style="width:10%;"><a href="vd/9 stok.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">10.</th>
						<th style="width:30%;"> Cek price list harga produk</th>
						<th style="width:10%;"><a href="vd/10 pricelist.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">11.</th>
						<th style="width:30%;"> Cek list transaksi cash penjualan</th>
						<th style="width:10%;"><a href="vd/11 lapcash.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">12.</th>
						<th style="width:30%;">Cek Laporan kredit piutang dengan cicilan </th>
						<th style="width:10%;"><a href="vd/12 lapkredit.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">13.</th>
						<th style="width:30%;"> Laporan Piutang atau tempo pembayaran</th>
						<th style="width:10%;"><a href="vd/13 laputang.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">14.</th>
						<th style="width:30%;"> Laporan list penjualan detail</th>
						<th style="width:10%;"><a href="vd/14 listjual.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">15.</th>
						<th style="width:30%;">Laporan income pendapatan periode </th>
						<th style="width:10%;"><a href="vd/15 income.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">16.</th>
						<th style="width:30%;">Setting konfigurasi </th>
						<th style="width:10%;"><a href="vd/16 setting.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">17.</th>
						<th style="width:30%;"> Akses website company profile anda.</th>
						<th style="width:10%;"><a href="vd/17 web.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">18.</th>
						<th style="width:30%;"> Akses toko online shop anda </th>
						<th style="width:10%;"><a href="vd/18 ol.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">19.</th>
						<th style="width:30%;">Dashboard kerja mesin kasir online </th>
						<th style="width:10%;"><a href="vd/19 office.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">20.</th>
						<th style="width:30%;">Fitur tutorial lengkap </th>
						<th style="width:10%;"><a href="vd/20 manual.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					<tr >
						<th style="width:5%;">21.</th>
						<th style="width:30%;"> Shut Down log out dari mesin kasir online</th>
						<th style="width:10%;"><a href="vd/21 off.mp4" target="blank" class="btn btn-danger "><i class="glyphicon glyphicon-play"></i> Play Video</a></th>
					</tr>
					
					
					
					
					
				</thead>
				



</table>
</main>
<?php require_once 'includes/footer.php'; ?>