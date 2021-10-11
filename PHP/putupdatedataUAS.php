<?php
	include "konek.php";
	header("Content-type:application/json");

	$method = $_SERVER['REQUEST_METHOD'];

	$result = array();

	if($method=='PUT'){

		parse_str(file_get_contents("php://input"), $_PUT);

		if(isset($_PUT['Nama_Negara']) AND isset($_PUT['Domain']) AND isset($_PUT['Kode_Negara']) AND isset($_PUT['Kode_Telepon']) AND isset($_PUT['Ibukota']) AND isset($_PUT['Benua']) AND isset($_PUT['Kawasan']) AND isset($_PUT['Populasi']) AND isset($_PUT['Lattitude']) AND isset($_PUT['Longitude']) AND isset($_PUT['Luas_Wilayah']) AND isset($_PUT['Nama_Asli']) AND isset($_PUT['Mata_Uang']) AND isset($_PUT['Bahasa']) AND isset($_PUT['Bendera']) AND isset($_PUT['id_data'])){

			$Nama_Negara = $_PUT['Nama_Negara'];
			$Domain = $_PUT['Domain'];
			$Kode_Negara = $_PUT['Kode_Negara'];
			$Kode_Telepon = $_PUT['Kode_Telepon'];
			$Ibukota = $_PUT['Ibukota'];
			$Benua = $_PUT['Benua'];
			$Kawasan = $_PUT['Kawasan'];
			$Populasi = $_PUT['Populasi'];
			$Lattitude = $_PUT['Lattitude'];
			$Longitude = $_PUT['Longitude'];
			$Luas_Wilayah = $_PUT['Luas_Wilayah'];
			$Nama_Asli = $_PUT['Nama_Asli'];
			$Mata_Uang = $_PUT['Mata_Uang'];
			$Bahasa = $_PUT['Bahasa'];
			$Bendera = $_PUT['Bendera'];
			$id_data = $_PUT['id_data'];

			$result['status'] = [
				"code" => 200,
				"description" => "1 data updated"
			];

			// Buat query
			$sql = "UPDATE info SET Nama_Negara='$Nama_Negara', Domain='$Domain', Kode_Negara='$Kode_Negara', Kode_Telepon='$Kode_Telepon', Ibukota='$Ibukota', Benua='$Benua', Kawasan='$Kawasan', Populasi='$Populasi', Lattitude='$Lattitude', Longitude='$Longitude', Luas_Wilayah='$Luas_Wilayah', Nama_Asli='$Nama_Asli', Mata_Uang='$Mata_Uang', Bahasa='$Bahasa', Bendera='$Bendera' WHERE id_data='$id_data'";
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