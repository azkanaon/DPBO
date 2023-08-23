<?php

include('config/db.php');

class Anggota extends DB
{
    function getAnggotaJoin()
    {
        $query = "SELECT * FROM anggota JOIN partai ON anggota.id_partai=partai.id_partai JOIN jabatan ON anggota.id_jabatan=jabatan.id_jabatan ORDER BY anggota.id";

        return $this->execute($query);
    }

    function getAnggota()
    {
        $query = "SELECT * FROM Anggota";
        return $this->execute($query);
    }

    function getAnggotaById($id)
    {
        $query = "SELECT * FROM anggota JOIN partai ON anggota.id_partai=partai.id_partai JOIN jabatan ON anggota.id_jabatan=jabatan.id_jabatan WHERE id=$id";
        return $this->execute($query);
    }

    function searchAnggota($keyword)
    {
        $query = "SELECT * FROM anggota JOIN partai ON anggota.id_partai=partai.id_partai JOIN jabatan ON anggota.id_jabatan=jabatan.id_jabatan WHERE nama LIKE '%".$keyword."%'";
        return $this->execute($query);
    }
    
    function filterAnggota()
    {
        $query = "SELECT * FROM anggota JOIN partai ON anggota.id_partai=partai.id_partai JOIN jabatan ON anggota.id_jabatan=jabatan.id_jabatan ORDER BY anggota.nama DESC";
        return $this->execute($query);
    }

    function addAnggota($data, $file)
    {
        $tmp_file = $file['file_image']['tmp_name'];
        $foto = $file['file_image']['name'];
        
        $dir = "assets/images/$foto";
        move_uploaded_file($tmp_file, $dir);

        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tahun_masuk = $data['tahun_masuk'];
        $partai_id = $data['partai'];
        $jabatan_id = $data['jabatan'];
        

        $query = "INSERT INTO anggota VALUES('', '$nama', '$alamat', '$tahun_masuk', '$foto', '$jabatan_id' ,'$partai_id')";

        return $this->executeAffected($query);
    }

    function updateAnggota($id, $data, $file, $img)
    {
        $tmp_file = $file['file_image']['tmp_name'];
        $foto = $file['file_image']['name'];
        
        if ($foto == "") {
            $foto = $img;
        }

        $dir = "assets/images/$foto";
        move_uploaded_file($tmp_file, $dir);


        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tahun_masuk = $data['tahun_masuk'];
        $partai_id = $data['partai'];
        $jabatan_id = $data['jabatan'];



        $query = "UPDATE anggota SET foto = '$foto', alamat = '$alamat', nama = '$nama', tahun_masuk = '$tahun_masuk', id_partai = '$partai_id', id_jabatan = '$jabatan_id' WHERE id = '$id'";
        
        return $this->executeAffected($query);
    }

    function deleteAnggota($id)
    {
        $query = "DELETE FROM anggota WHERE id = $id";
        return $this->executeAffected($query);
    }
}