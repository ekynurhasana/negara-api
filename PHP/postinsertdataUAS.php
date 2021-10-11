<?php
	
	include "konek.php";
	header("Content-type:application/json");

	$method = $_SERVER['REQUEST_METHOD'];

	$result = array();

	if($method=='POST'){

		if(isset($_POST['Nama_Negara']) AND isset($_POST['Domain']) AND isset($_POST['Kode_Negara']) AND isset($_POST['Kode_Telepon']) AND isset($_POST['Ibukota']) AND isset($_POST['Benua']) AND isset($_POST['Kawasan']) AND isset($_POST['Populasi']) AND isset($_POST['Lattitude']) AND isset($_POST['Longitude']) AND isset($_POST['Luas_Wilayah']) AND isset($_POST['Nama_Asli']) AND isset($_POST['Mata_Uang']) AND isset($_POST['Bahasa']) AND isset($_POST['Bendera'])){

			$Nama_Negara = $_POST['Nama_Negara'];
			$Domain = $_POST['Domain'];
			$Kode_Negara = $_POST['Kode_Negara'];
			$Kode_Telepon = $_POST['Kode_Telepon'];
			$Ibukota = $_POST['Ibukota'];
			$Benua = $_POST['Benua'];
			$Kawasan = $_POST['Kawasan'];
			$Populasi = $_POST['Populasi'];
			$Lattitude = $_POST['Lattitude'];
			$Longitude = $_POST['Longitude'];
			$Luas_Wilayah = $_POST['Luas_Wilayah'];
			$Nama_Asli = $_POST['Nama_Asli'];
			$Mata_Uang = $_POST['Mata_Uang'];
			$Bahasa = $_POST['Bahasa'];
			$Bendera = $_POST['Bendera'];

			$result['status'] = [
				"code" => 200,
				"description" => "1 data inserted"
			];

			// Buat query
			$sql = "INSERT INTO info (Nama_Negara, Domain, Kode_Negara, Kode_Telepon, Ibukota, Benua, Kawasan, Populasi, Lattitude, Longitude, Luas_Wilayah, Nama_Asli, Mata_Uang, Bahasa, Bendera) VALUES ('$Nama_Negara', '$Domain', '$Kode_Negara', '$Kode_Telepon', '$Ibukota', '$Benua', '$Kawasan', '$Populasi', '$Lattitude', '$Longitude', '$Luas_Wilayah', '$Nama_Asli', '$Mata_Uang', '$Bahasa', '$Bendera')";
			// Eksekusi query
			$conn->query($sql);

			$result['results'] = [
				"Nama_Negara" => $Nama_Negara,
				"Domain" => $Domain,
				"Kode_Negara" => $Kode_Negara,
				"Kode_Telepon" => $Kode_Telepon,
				"Ibukota" => $Ibukota,
				"Benua" => $Benua,
				"Kawasan" => $Kawasan,
				"Populasi" => $Populasi,
				"Lattitude" => $Lattitude,
				"Longitude" => $Longitude,
				"Luas_Wilayah" => $Luas_Wilayah,
				"Nama_Asli" => $Nama_Asli,
				"Mata_Uang" => $Mata_Uang,
				"Bahasa" => $Bahasa,
				"Bendera" => $Bendera
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