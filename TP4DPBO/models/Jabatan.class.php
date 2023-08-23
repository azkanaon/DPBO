<?php

class Jabatan extends DB
{
    
    function getJabatan()
    {
        $query = "SELECT * FROM jabatan";
        return $this->execute($query);
    }
    
    // tampil berdasarkan id
    function getJabatanSpesifik($id)
    {
        $query = "SELECT * FROM jabatan where id=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $query = "insert into jabatan values ('','$name')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "delete FROM jabatan WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($id)
    {
        $name = $_POST['name'];
        $query = "update jabatan set name = '$name' where id = '$id'";
        return $this->execute($query);
    }

}