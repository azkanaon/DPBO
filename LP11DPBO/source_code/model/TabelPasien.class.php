<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	// query select
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	// query delete
	function deletePasien($id)
	{
		// Query mysql select data pasien
		$query = "DELETE FROM pasien WHERE id = '$id'";
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// query add
	function addPasien($data)
	{
		$nama = $data['nama'];
		$nik = $data['nik'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		// Query mysql select data pasien
		$query = "insert into pasien values ('','$nik', '$nama','$tempat', '$tl', '$gender', '$email', '$telp')";
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// query edit
	function editPasien($data)
	{
		$nama = $data['nama'];
		$id = $data['id'];
		$nik = $data['nik'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		// Query mysql select data pasien
		$query = "update pasien set nama = '$nama', nik = '$nik', tempat = '$tempat', tl = '$tl', gender='$gender', email = '$email', telp = '$telp' where id = $id";
		// Mengeksekusi query
		return $this->execute($query);
	}
}
