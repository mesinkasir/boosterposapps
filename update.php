<?php require_once 'includes/header.php'; ?>

<?php 
$user_id = $_SESSION['userId'];
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();
?>

  <main class="bd-masthead" id="content"><br/>
<center>
   <h3><center>UPDATE AREA </center></h3>
		  	  <p><small>
			  Mohon maaf untuk saat ini anda belum melakukan progress update toko online shop sehingga anda tidak dapat mengakses toko online shop anda.<hr>
			  
</small></p>
  MANFAAT UPDATE ONLINE SHOP	<hr>
<p><small>
Era modern saat ini online shop sangat membantu anda dalam pemasaran di bidang digital<br/> Dengan online shop memudahkan pelanggan untuk melakukan transaksi secara langsung,online shop benar benar membuka market dalam dan luar negri dalam kebutuhan marketing digital anda.
untuk menggebrak market maka anda perlu melakukan berbagai iklan digital seperti iklan google iklan fb dan iklan instagram untuk kebutuhan startegi marketing anda agar pelanggan dapat mengunjungi online shop anda.<br/>
Dengan memiliki online shop maka anda sudah mempunyai icon pendamping usaha toko shop store anda di online world .
<br>- UPDATE PRICE -<br>
Untuk online shop update fee instalasi dan setting hanya <strong><u>Rp.1.000.000/tahun</u></strong> Harga dapat berubah sewaktu waktu tanpa pemberitahuan terlebih dahulu.<br/>Anda dapat memasukan all produk anda sendiri sesuai dengan produk dan price list produk produk anda.
</small><hr>MANFAAT UPDATE WEBSITE COMPANY PROFILE<hr>	
<p><small>
Era modern saat ini kepemilikan website company profile adalah mutlak dibutuhkan untuk symbol usaha anda di dunia online world.Dengan adanya website company profile maka pelanggan anda dapat mendapatkan informasi secara detail mengenai perusahaan anda. sehingga memudahkan pelanggan anda untuk menemukan anda lebih lanjut,hal ini tidak untuk pasar dalam negri saja namun juga tidak menutup kemungkinan untuk mencapai pasar luar negri, dengan memanfaatkan iklan google , fb hingga instagram maka anda akan lebih menguasai dunia digital marketing.<br/>
Segera lakukan update website company profile untuk masa depan yang lebih baik.
<br> -- UPDATE PRICE --<br>	
Untuk one page lading page company profile website update hanya <strong><u>Rp.500.000/tahun</u></strong> Harga dapat berubah sewaktu waktu tanpa pemberitahuan terlebih dahulu.
</small></p>



</center>



<script src="custom/js/setting.js"></script>
<?php require_once 'includes/footer.php'; ?>