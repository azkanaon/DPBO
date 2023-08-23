<?php

include('config/db.php');
include('classes/DB.php');
include('classes/Partai.php');
include('classes/Jabatan.php');
include('classes/Anggota.php');
include('classes/Template.php');

$listAnggota = new Anggota($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$listAnggota->open();
$listAnggota->getAnggotaJoin();

if (isset($_POST['btn-cari'])) {
    $listAnggota->searchAnggota($_POST['cari']);
} else if(isset($_POST['btn-filter'])){
    $listAnggota->filterAnggota();
}
else {
    $listAnggota->getAnggotaJoin();
}

$data = null;

while ($row = $listAnggota->getResult()) {
    $data .= '<div class="col gx-2 gy-3 justify-content-center">' .
        '<div class="card pt-4 px-2 pengurus-thumbnail">
        <a href="detail.php?id=' . $row['id'] . '">
            <div class="row justify-content-center">
                <img src="assets/images/' . $row['foto'] . '" class="card-img-top" alt="' . $row['foto'] . '">
            </div>
            <div class="card-body">
                <p class="card-text pengurus-nama my-0">' . $row['nama'] . '</p>
                <p class="card-text jabatan-nama my-0">' . $row['nama_jabatan'] . '</p>
                <p class="card-text divisi-nama">' . $row['nama_partai'] . '</p>
            </div>
        </a>
    </div>
    </div>';
}

$listAnggota->close();
$home = new Template('templates/skin.html');
$home->replace('DATA_ANGGOTA', $data);
$home->write();
