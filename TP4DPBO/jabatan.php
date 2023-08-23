<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Jabatan.controller.php");

$jabatan = new JabatanController();

if (isset($_POST['add'])) {
    // add
    $jabatan->add($_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $jabatan->delete($id);
}
// pindah page update
else if (!empty($_GET['id_edit'])) {
    $id = $_GET['id_edit'];
    $jabatan->show($id);
}
//proses update
else if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $jabatan->edit($id, $_POST);
}
// tampil
else{
    $jabatan->index();
}

