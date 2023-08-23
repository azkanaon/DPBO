<?php

include('config/db.php');

class Jabatan extends DB
{
    function getJabatan()
    {
        $query = "SELECT * FROM Jabatan";
        return $this->execute($query);
    }

    function getJabatanById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id_jabatan=$id";
        return $this->execute($query);
    }

    function searchJabatan($keyword)
    {
        $query = "SELECT * FROM jabatan WHERE nama_jabatan LIKE '%".$keyword."%'";
        return $this->execute($query);
    }
    
    function filterJabatan()
    {
        $query = "SELECT * FROM jabatan ORDER BY nama_jabatan DESC";
        return $this->execute($query);
    }

    function addJabatan($data)
    {
        $nama = $data['nama'];
        $query = "INSERT INTO jabatan VALUES('','$nama')";
        return $this->executeAffected($query);
    }

    function updateJabatan($id, $data)
    {
        $nama = $data['nama'];
        $query = "UPDATE jabatan SET nama_jabatan = '$nama' WHERE id_jabatan = '$id'";
        return $this->executeAffected($query);
    }

    function deleteJabatan($id)
    {
        $query = "DELETE FROM jabatan WHERE id_jabatan = $id";
        return $this->executeAffected($query);
    }
}