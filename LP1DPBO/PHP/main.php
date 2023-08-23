<?php 
    require "Mahasiswa.php";
    // hard code untuk semua masukkan
    $mahasiswa[0] = new Mahasiswa("Azka", "2100812","Ilkom","FPMIPA");
    $mahasiswa[1] = new Mahasiswa("Alam", "2100813","Ilkom","FPMIPA");
    $mahasiswa[2] = new Mahasiswa("Yusuf", "2100814","Ilkom","FPMIPA");
    $mahasiswa[3] = new Mahasiswa("Rasyid", "2100815","Ilkom","FPMIPA");
    $mahasiswa[4] = new Mahasiswa("Nadhief", "2100816","Ilkom","FPMIPA");
    $mahasiswa[5] = new Mahasiswa("Myzza", "2100817","Ilkom","FPMIPA");
    $mahasiswa[6] = new Mahasiswa("Daffa", "2100818","Ilkom","FPMIPA");
    $mahasiswa[7] = new Mahasiswa("Labib", "2100819","Ilkom","FPMIPA");
    

    // Outputan
    echo " <b>Data Mahasiswa</b><br>";
    foreach ($mahasiswa as $a) {
        echo "Nama        : " . $a->get_nama() . "<br>";
        echo "NIM         : " . $a->get_nim() . "<br>";
        echo "Prodi       : " . $a->get_prodi() . "<br>";
        echo "Fakultas    : " . $a->get_fakultas(). "<br>";
        echo "<br>";
    }



?>