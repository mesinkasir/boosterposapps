<?php require_once 'includes/header.php'; ?>

<?php 
$user_id = $_SESSION['userId'];
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();
?>

  <main class="bd-masthead text-center" id="content"><br/>
    <h1>SETTING</h1>
    <p class="lead">Setting & Configuration.</p>
	<hr/>
</main>
<div class="masthead-followup row m-0 border border-white text-center">
   <a href="setting.php" class="text-white">
 <div class="col-12 col-md-4 p-3 p-md-5 bg-success text-white border border-white">
	 <h3>USER</h3>
	 <img src="img/user.png">
    <p>Change user and password login.</p>
    </a>
  </div>
      <div class="col-12 col-md-4 p-3 p-md-5 bg-danger text-white border border-white">
      <a href="https://mesinkasironline.web.app" class="text-white">
    <h3>WEBSITE</h3>
	<img src="img/web.png">
    <p>Update your website now.</p>
  </a>
  </div>	
  
    <div class="col-12 col-md-4 p-3 p-md-5 bg-info text-white border border-white">
    <a href="https://mesinkasir.github.io" class="text-white">
   	<h3>ONLINE SHOP</h3>
	<img src="img/ol.png">
    <p>
Update toko online shop.
    </p>
    </a>
  </div>
</div>



<script src="custom/js/setting.js"></script>
<?php require_once 'includes/footer.php'; ?>