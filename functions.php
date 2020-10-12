<?php
// koneksi dbased
$conn = mysqli_connect("localhost", "root", "", "boosterpos");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


//function rupiah($value,$rp=''){
//	global $conn;
	//if($value){
		//if(!$rp){
	//$formated = str_replace(',','.', number_format($value));
	//return $formated;
//}else{
	//$formated = 'Rp '.str_replace(',','.', number_format($value));
//return $formated;}
	//}
//else
//{
	//return'-';
//}
//}

function cari($keyword){
	$query = "SELECT * FROM stok1 WHERE 
	product_name LIKE '%$keyword%' OR 
	quantiy LIKE '%$keyword%' OR 
	rate LIKE '%$keyword%' OR 
	categories_name LIKE '%$keyword%' OR 
	brand_name LIKE '%$keyword%' OR 
	client_name LIKE '%$keyword%' OR 
	rate LIKE '%$keyword%' OR 
	rate LIKE '%$keyword%' OR 
	rate LIKE '%$keyword%'
	";
return query($query);
	
}

?>