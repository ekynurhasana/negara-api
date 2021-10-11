<?php
	
	include "konek.php";
	header("Content-type:application/json");
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: *");

	$method = $_SERVER['REQUEST_METHOD'];

	$result = array();

	if($method=='GET'){
		$result["status"] = [
			"code" => 200,
			"description" => 'Request Valid'
		];
		// Buat query
		$sql = "SELECT * FROM info";
		// Eksekusi query
		$hasil_query = $conn->query($sql);

		$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
	}
	else{
		$result["status"] = [
			"code" => 400,
			"description" => 'Request Not Valid'
		];
	}

	echo json_encode($result);
?>