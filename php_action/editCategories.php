<?php 	
require_once 'core.php';
$valid['success'] = array('success' => false, 'messages' => array());
if($_POST) {	
	$brandName = $_POST['editCategoriesName'];
  $brandStatus = $_POST['editCategoriesStatus']; 
  $categoriesId = $_POST['editCategoriesId'];
	$sql = "UPDATE categories SET categories_name = '$brandName', categories_active = '$brandStatus' WHERE categories_id = '$categoriesId'";
	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Suksess edit kategori";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error ";
	}
	$connect->close();
	echo json_encode($valid);
} 