<?php 
require_once 'php_action/db_connect.php';
session_start();
if(isset($_SESSION['userId'])) {
	header('location: http://localhost/boosterpos/home.php');	
}
$errors = array();
if($_POST) {		
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(empty($username) || empty($password)) {
		if($username == "") {
			$errors[] = "Username is required";
		} 
		if($password == "") {
			$errors[] = "Password is required";
		}
	} else {
		$sql = "SELECT * FROM users WHERE username = '$username'";
		$result = $connect->query($sql);
		if($result->num_rows == 1) {
			$password = md5($password);
			$mainSql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$mainResult = $connect->query($mainSql);
			if($mainResult->num_rows == 1) {
				$value = $mainResult->fetch_assoc();
				$user_id = $value['user_id'];
				$_SESSION['userId'] = $user_id;
				header('location: http://localhost/boosterpos/home.php');	
			} else{
				$errors[] = "Incorrect username/password combination";
			} 
		} else {		
			$errors[] = "Username tidak terdaftar";		
		} 
	} 	
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>App Pos Online CLouds Based Boosterpos Apps</title>
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">
	<link href='http://3.bp.blogspot.com/_jHv7i6tse0M/TGjEsMzAU8I/AAAAAAAABIA/3YBlF3GitzY/s1600/favicon.ico' rel='SHORTCUT ICON'/>
  <link href='/img/logo.jpg" rel='SHORTCUT ICON'/>
  <link rel="stylesheet" href="custom/css/custom.css">	
	<script src="assests/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container text-center lead">
			<div class="row">
			<div class="col-md-5 col-md-offset-4 text-center">
			<img src="img/boosterposprogramkasironline.jpg" class="img-responsive rounded">
			<div class="panel panel-info">
					<div class="panel-heading text-center">
						<h3 class="panel-title">Boosterpos Apps</h3>
					</div>
					<div class="panel-body">
						<div class="messages">
							<?php if($errors) {
								foreach ($errors as $key => $value) {
									echo '<div class="alert alert-warning" role="alert">
									<i class="glyphicon glyphicon-exclamation-sign"></i>
									'.$value.'</div>';										
									}
								} ?>
						</div>
						<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
							<fieldset>
							  <div class="form-group">
									<label for="username" class="col-sm-2 control-label"><i class="glyphicon glyphicon-user text-primary"></i></label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" />
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label"><i class="glyphicon glyphicon-lock text-primary"></i></label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" />
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-block btn-lg btn-primary">  Log in</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
		<a class="text-center" href="http://www.mesinkasirasia.web.app" target="blank">www.mesinkasirasia.web.app</a>
			</div>
		</div>
	</div>
</body>
</html>
