<?php 

    include('config/db.php');
    include('classes/DB.php');
    include('classes/Template.php');
    include('classes/Anggota.php');
    include('classes/Partai.php');
    include('classes/Jabatan.php');

    $partai = new Partai($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    $jabatan = new Jabatan($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    $anggota = new Anggota($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    $tmp_image = new Anggota($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
    $partai->open();
    $jabatan->open();
    $anggota->open();
    $tmp_image->open();

    // VAR UNTUK SHOW DIVISI DAN JABATAN
    $partai_options = null;
    $jabatan_options = null;

    // VAR UNTUK EDIT TAPI JADI GLOBAL
    $img_edit = ""; $nim_edit = "";
    $nama_edit = ""; $semester_edit = "";
    $partai_edit = ""; $jabatan_edit = "";
    $alamat_edit = ""; $tahun_masuk_edit = "";

    $view_form = new Template('templates/skintambah.html');
    if (!isset($_GET['edit'])) {
        if (isset($_POST['submit'])) {
            if ($anggota->addAnggota($_POST, $_FILES) > 0) {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'form.php';
                </script>
                ";
            }
        }
        
        // Connect to Tabel Divisi
        
        $partai->getPartai();
    
        // Looping for Shows the data 
        while ($row = $partai->getResult()) {
            $partai_options .= "<option value=". $row['id_partai']. ">" . $row['nama_partai'] . "</option>";
        }
        
        $jabatan->getJabatan();
    
        // Looping for shows the data
        while($row = $jabatan->getResult()) {
            $jabatan_options .= "<option value=". $row['id_jabatan']. ">" . $row['nama_jabatan'] . "</option>";
        }
    } else if (isset($_GET['edit'])) {
        $_ID = $_GET['edit'];
        $tmp_image->getAnggota();
        $tmp_image->getAnggotaById($_ID);
        $temp_fix = $tmp_image->getResult();
        $temp_img = $temp_fix['foto'];
        if (isset($_POST['submit'])) {
            if ($anggota->updateAnggota($_ID, $_POST, $_FILES, $temp_img) > 0) {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'form.php';
                </script>
                ";
            }
        }
        $anggota->getAnggotaById($_ID);

        $row = $anggota->getResult();
        $img_edit = $row['foto'];
        $alamat_edit = $row['alamat'];
        $nama_edit = $row['nama'];
        $tahun_masuk_edit = $row['tahun_masuk'];
        $partai_edit = $row['id_partai'];
        $jabatan_edit = $row['id_jabatan'];

        $partai->getPartai();
    
        // Looping for Shows the data 
        while ($row = $partai->getResult()) {
            $select = ($row['id_partai'] == $partai_edit) ? 'selected' : "";
            $partai_options .= "<option value=". $row['id_partai']. " . $select . >" . $row['nama_partai'] . "</option>";
        }
    
    
        // Connect to Tabel Jabatan
        
        $jabatan->getJabatan();
    
        // Looping for shows the data
        while($row = $jabatan->getResult()) {
            $select = ($row['id_jabatan'] == $jabatan_edit) ? 'selected' : "";
            $jabatan_options .= "<option value=". $row['id_jabatan']. " . $select . >" . $row['nama_jabatan'] . "</option>";
        }
    }

    $view_form->replace('IMAGE_DATA' , $img_edit);
    $view_form->replace('TAHUN_MASUK_DATA' , $tahun_masuk_edit);
    $view_form->replace('NAMA_DATA' , $nama_edit);
    $view_form->replace('ALAMAT_DATA' , $alamat_edit);
    $view_form->replace('PARTAI_DATA' , $partai_edit);
    $view_form->replace('JABATAN_DATA' , $jabatan_edit);
    $view_form->replace('PARTAI_OPTIONS', $partai_options);
    $view_form->replace('JABATAN_OPTIONS', $jabatan_options);
    $view_form->write();


    $anggota->close();
    $partai->close();
    $jabatan->close();

?>