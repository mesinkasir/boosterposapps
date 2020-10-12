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
    <h1>MANUAL</h1>
    <p class="lead">Live Tutorial Panduan manual operasional.</p>
	<hr/>
	</center>
</main><center>
<div class="masthead-followup row m-0 border border-white">
   <a href="ebook.php" class="text-white">
 <div class="col-12 col-md-4 p-3 p-md-5 bg-success text-white border border-white">
	 <h3>EBOOK</h3>
	 <img src="img/live.png">
    <p>Ebook panduan manual operasional system.</p>
  </div>
  </a>
     <a href="video.php">
  <div class="col-12 col-md-4 p-3 p-md-5 bg-danger text-white border border-white">
    <h3>	VIDEO</h3>
	<img src="img/vd.png">
    <p>Video panduan manual operasional system.</p>
  </div>	
  </a>
  
 <a href="https://www.fb.com/mesinkasircomplete" target="blank" class="text-white">
   <div class="col-12 col-md-4 p-3 p-md-5 bg-info text-white border border-white">
   	<h3>CHAT</h3>
	<img src="img/msg.png">
    <p>
Hubungi kami untuk bantuan anda live.
    </p>
  </div></a>
</div></center>




<?php require_once 'includes/footer.php'; ?>