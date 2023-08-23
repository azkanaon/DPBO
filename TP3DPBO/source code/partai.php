<?php

include('config/db.php');
include('classes/DB.php');
include('classes/partai.php');
include('classes/Template.php');

$partai = new Partai($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$partai->open();
if (isset($_POST['btn-cari'])) {
    $partai->searchPartai($_POST['cari']);
} else if(isset($_POST['btn-filter'])){
    $partai->filterPartai();
}else {
    $partai->getPartai();
}
$view = new Template('templates/skintabel.html');

if (!isset($_GET['id'])) {
    if (isset($_POST['submit'])) {
        if ($partai->addPartai($_POST) > 0) {
            echo "<script>
                alert('Data berhasil ditambah!');
                document.location.href = 'partai.php';
            </script>";
        } else {
            echo "<script>
                alert('Data gagal ditambah!');
                document.location.href = 'partai.php';
            </script>";
        }
    }
    $btn = 'Tambah';
    $title = 'Tambah';
}




$mainTitle = 'partai';
$header = '<tr>
<th scope="row">No.</th>
<th scope="row">Nama partai</th>
<th scope="row">Aksi</th>
</tr>';
$data = null;
$no = 1;
$formLabel = 'partai';

while ($div = $partai->getResult()) {
    $data .= '<tr>
    <th scope="row">' . $no . '</th>
    <td>' . $div['nama_partai'] . '</td>
    <td style="font-size: 22px;">
        <a href="partai.php?id=' . $div['id_partai'] . '" title="Edit Data">
        <i class="bi bi-pencil-square text-warning"></i>
        </a>&nbsp;
        <a href="partai.php?hapus=' . $div['id_partai'] . '" title="Delete Data"><i class="bi bi-trash-fill text-danger"></i></a>
        </td>
    </tr>';
    $no++;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id > 0) {
        if (isset($_POST['submit'])) {
            if ($partai->updatePartai($id, $_POST) > 0) {
                echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'partai.php';
            </script>";
            } else {
                echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'partai.php';
            </script>";
            }
        }

        $partai->getPartaiById($id);
        $row = $partai->getResult();

        $dataUpdate = $row['nama_partai'];
        $btn = 'Simpan';
        $title = 'Ubah';

        $view->replace('DATA_VAL_UPDATE', $dataUpdate);
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if ($id > 0) {
        if ($partai->deletePartai($id) > 0) {
            echo "<script>
                alert('Data berhasil dihapus!');
                document.location.href = 'partai.php';
            </script>";
        } else {
            echo "<script>
                alert('Data gagal dihapus!');
                document.location.href = 'partai.php';
            </script>";
        }
    }
}






$partai->close();



$view->replace('DATA_MAIN_TITLE', $mainTitle);
$view->replace('DATA_TABEL_HEADER', $header);
$view->replace('DATA_TITLE', $title);
$view->replace('DATA_BUTTON', $btn);
$view->replace('TES', 'partai.php');
$view->replace('DATA_FORM_LABEL', $formLabel);
$view->replace('DATA_TABEL', $data);
$view->write();