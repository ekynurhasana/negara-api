<?php
	
	include "konek.php";
	header("Content-type:application/json");	
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: *");

	$method = $_SERVER['REQUEST_METHOD'];

	$result = array();

	if($method=='GET'){

		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE id_data='$id'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Kawasan'])){
			$Kawasan = $_GET['Kawasan'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Kawasan='$Kawasan'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Bahasa'])){
			$Bahasa = $_GET['Bahasa'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];

			// Buat query
			$sql = "SELECT * FROM info WHERE Bahasa='$Bahasa'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Ibukota'])){
			$Ibukota = $_GET['Ibukota'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];

			// Buat query
			$sql = "SELECT * FROM info WHERE Ibukota='$Ibukota'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Kode_Negara'])){
			$Kode_Negara = $_GET['Kode_Negara'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Kode_Negara='$Kode_Negara'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Kode_Telepon'])){
			$Kode_Telepon = $_GET['Kode_Telepon'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Kode_Telepon='$Kode_Telepon'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Mata_Uang'])){
			$Mata_Uang = $_GET['Mata_Uang'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Mata_Uang='$Mata_Uang'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Nama_Negara'])){
			$Nama_Negara = $_GET['Nama_Negara'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Nama_Negara='$Nama_Negara'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(isset($_GET['Benua'])){
			$Benua = $_GET['Benua'];

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
			];
			// Buat query
			$sql = "SELECT * FROM info WHERE Benua='$Benua'";
			// Eksekusi query
			$hasil_query = $conn->query($sql);

			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}
		elseif(!isset($_GET)){

			$result['status'] = [
				"code" => 200,
				"description" => "Request Valid"
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