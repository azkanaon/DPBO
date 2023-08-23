<?php

include('config/db.php');

class Partai extends DB
{
    function getPartai()
    {
        $query = "SELECT * FROM Partai";
        return $this->execute($query);
    }

    function getPartaiById($id)
    {
        $query = "SELECT * FROM Partai WHERE id_partai=$id";
        return $this->execute($query);
    }

    function searchPartai($keyword)
    {
        $query = "SELECT * FROM Partai WHERE nama_partai LIKE '%".$keyword."%'";
        return $this->execute($query);
    }
    
    function filterPartai()
    {
        $query = "SELECT * FROM Partai ORDER BY nama_partai DESC";
        return $this->execute($query);
    }

    function addPartai($data)
    {
        $nama = $data['nama'];
        $query = "INSERT INTO Partai VALUES('', '$nama')";
        return $this->executeAffected($query);
    }
    
    function updatePartai($id, $data)
    {
        $nama = $data['nama'];
        $query = "UPDATE Partai SET nama_partai = '$nama' WHERE id_partai = '$id'";
        // $query = "INSERT INTO Partai VALUES('', '$nama')";
        return $this->executeAffected($query);
    }

    function deletePartai($id)
    {
        $query = "DELETE FROM Partai WHERE id_partai = $id";
        return $this->executeAffected($query);
    }
}