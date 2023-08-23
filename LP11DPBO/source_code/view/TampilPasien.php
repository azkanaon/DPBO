<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class TampilPasien implements KontrakView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

	function tampil()
	{
		$this->prosespasien->prosesDataPasien();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosespasien->getNik($i) . "</td>
			<td>" . $this->prosespasien->getNama($i) . "</td>
			<td>" . $this->prosespasien->getTempat($i) . "</td>
			<td>" . $this->prosespasien->getTl($i) . "</td>
			<td>" . $this->prosespasien->getGender($i) . "</td>
			<td>" . $this->prosespasien->getEmail($i) . "</td>
			<td>" . $this->prosespasien->getTelp($i) . "</td>
			<td><button class='btn btn-info'> <a href='index.php?update=".$this->prosespasien->getId($i)."'> UPDATE </a></button> |  <button class='btn btn-danger'> <a href='index.php?hapus=".$this->prosespasien->getId($i)."'> DELETE </a></button></td>";
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}
	
	function tampilDetail($id)
	{
		$this->prosespasien->prosesDataPasien();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			if($this->prosespasien->getId($i) == $id){
				$data .= "
				<input hidden value='".$this->prosespasien->getId($i)."' type='text' class='form-control' name = 'id' >
				<div class='form-group'>
				<label for='exampleFormControlInput1'>NIK</label>
				<input value='".$this->prosespasien->getNik($i)."' type='text' class='form-control' name='nik' >
				</div>
				<div class='form-group'>
				<label for='exampleFormControlInput1'>Nama</label>
				<input value='".$this->prosespasien->getNama($i)."' type='text' class='form-control' name = 'nama' >
				</div>
				<div class='form-group'>
				<label for='exampleFormControlInput1'>Tempat</label>
				<input value='".$this->prosespasien->getTempat($i)."' type='text' class='form-control' name='tempat' >
				</div>
				<div class='form-group'>
				<label for='exampleFormControlInput1'>Tanggal Lahir</label>
				<input value='".$this->prosespasien->getTl($i)."' type='date' class='form-control' name='tl'>
				</div>
				<div class='form-group'>
				<label for='exampleFormControlSelect1'>Gender</label>
				<select class='form-control' id='exampleFormControlSelect1' name='gender'>
					<option value='Laki-laki'>Laki-laki</option>
					<option value='Perempuan'>Perempuan</option>
				</select>
				</div>
				<div class='form-group'>
					<label for='exampleFormControlInput1'>Email address</label>
					<input value='".$this->prosespasien->getEmail($i)."' type='email' class='form-control' name='email' >
				</div>
				<div class='form-group'>
				<label for='exampleFormControlInput1'>Nomor Telepon</label>
				<input value='".$this->prosespasien->getTelp($i)."' type='text' class='form-control' name='telp' >
				</div>
				";
				break;
			}
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/formEdit.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_FORM", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function destroy($id){
		$this->prosespasien->deleteDataPasien($id);
		header("location:index.php");
	}
	
	function store($data){
		$this->prosespasien->addDataPasien($data);
		header("location:index.php");
	}
	
	function edit($data){
		$this->prosespasien->editDataPasien($data);
		header("location:index.php");
	}
}
