<?php

include('config/db.php');
include('classes/DB.php');
include('classes/Partai.php');
include('classes/Jabatan.php');
include('classes/Anggota.php');
include('classes/Template.php');

$pengurus = new Anggota($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$pengurus->open();

$data = nulL;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id > 0) {
        $pengurus->getAnggotaById($id);
        $row = $pengurus->getResult();

        $data .= '<div class="card-header text-center">
        <h3 class="my-0">Detail ' . $row['nama'] . '</h3>
        </div>
        <div class="card-body text-end">
            <div class="row mb-5">
                <div class="col-3">
                    <div class="row justify-content-center">
                        <img src="assets/images/' . $row['foto'] . '" class="img-thumbnail" alt="' . $row['foto'] . '" width="60">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card px-3">
                            <table border="0" class="text-start">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>' . $row['nama'] . '</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td>' . $row['alamat'] . '</td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>:</td>
                                    <td>' . $row['tahun_masuk'] . '</td>
                                </tr>
                                <tr>
                                    <td>Partai</td>
                                    <td>:</td>
                                    <td>' . $row['nama_partai'] . '</td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td>' . $row['nama_jabatan'] . '</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <a href="form.php?edit=' . $row['id'] .'"><button type="button" class="btn btn-success text-white">Ubah Data</button></a>
                <a href="detail.php?del=' . $row['id'] . '"><button type="button" class="btn btn-danger">Hapus Data</button></a>
            </div>';
    }
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    if ($id > 0) {
        if ($pengurus->deleteAnggota($id) > 0) {
            echo 
            "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo 
            "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'index.php';
            </script>
            ";
        }
    }
}

$pengurus->close();
$detail = new Template('templates/skindetail.html');
$detail->replace('DATA_DETAIL_PENGURUS', $data);
$detail->write();
