<?php 
    // Memanggil class yng akan digunakan
    include "Mahasiswa.php";

    // inisialisasi
    echo "Berikut adalah data diri anda <br>";
    $nik = "32732628030300000";
    $nama = "Muhammad Azka Atqiya";
    $gender = "Laki-Laki";
    $nim = "2100812";
    $prodi = "Ilmu Komputer";
    $fakultas = "FPMIPA";
    $asalUniv = "UPI";
    $emailEdu = "azkaatqiya4@upi.edu";

    // masukkan ke variabel baru
    $data[0] = new Mahasiswa($nik, $nama, $gender, $asalUniv, $emailEdu, $nim, $prodi, $fakultas);

    // loop untuk pemanggilan nilai
    foreach ($data as $a) {
        echo "NIK           : " . $a->getNik() . "<br>";
        echo "Nama          : " . $a->getNama() . "<br>";
        echo "Jenis Kelamin : " . $a->getGender() . "<br>";
        echo "NIM           : " . $a->getNim() . "<br>";
        echo "Prodi         : " . $a->getProdi() . "<br>";
        echo "Fakultas      : " . $a->getFakultas(). "<br>";
        echo "Asal Univ     : " . $a->getAsalUniv(). "<br>";
        echo "Email Edu     : " . $a->getEmailEdu(). "<br>";
        echo "<br>";
    }
?>