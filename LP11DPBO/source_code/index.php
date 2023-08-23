<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");


$tp = new TampilPasien();

// jika ada hapus
if(isset($_GET['hapus'])){
    $tp->destroy($_GET['hapus']);
}

// jika ada add
else if(isset($_POST['add'])){
    $tp->store($_POST);
}

// jika ada update
else if(isset($_GET['update'])){
    $tp->tampilDetail($_GET['update']);
}

// jika menekan tombol edit di halaman detail
else if(isset($_POST['update'])){
    $tp->edit($_POST);
}

// tampil
else{
    $tp->tampil();
}


