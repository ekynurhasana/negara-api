<?php
	include "konek.php";
	header("Content-type:application/json");

	$method = $_SERVER['REQUEST_METHOD'];

	$result = array();

	if($method=='DELETE'){

		parse_str(file_get_contents("php://input"), $_DELETE);

		if(isset($_DELETE['id_data'])){

			$id_data = $_DELETE['id_data'];

			$result['status'] = [
				"code" => 200,
				"description" => "1 data deleted"
			];
			// Buat query
			$sql = "DELETE FROM info WHERE id_data='$id_data'";
			// Eksekusi query
			$conn->query($sql);

			$result['results'] = [
				"id_data" => $id_data,
			];
		}
		else{
			$result["status"] = [
			"code" => 400,
			"description" => 'Parameter Invalid'
			];
		}

	}
	else{
		$result["status"] = [
			"code" => 400,
			"description" => 'Request Not Valid'
		];
	}

	echo json_encode($result);
?>