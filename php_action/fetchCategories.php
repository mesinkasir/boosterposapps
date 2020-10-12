<?php 	
require_once 'core.php';
$sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1";
$result = $connect->query($sql);
$output = array('data' => array());
if($result->num_rows > 0) { 
 $activeCategories = ""; 
 while($row = $result->fetch_array()) {
 	$categoriesId = $row[0];
 	if($row[2] == 1) {
 		$activeCategories = "<label class='label label-success'>Aktif</label>";
 	} else {
 		$activeCategories = "<label class='label label-danger'>Non Aktif</label>";
 	}
 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" id="editCategoriesModalBtn" data-target="#editCategoriesModal" onclick="editCategories('.$categoriesId.')"> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeCategoriesModal" id="removeCategoriesModalBtn" onclick="removeCategories('.$categoriesId.')"> Delete</a></li>       
	  </ul>
	</div>';
 	$output['data'][] = array( 		
 		$row[1], 		
 		$activeCategories,
 		$button 		
 		); 	
 }
}
$connect->close();
echo json_encode($output);