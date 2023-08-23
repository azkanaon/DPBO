<?php

class Members extends DB
{
    // join dengan tabel jabatan
    function getMembers()
    {
        $query = "SELECT members.id, members.name, members.email, members.phone, members.join_date, jabatan.id, jabatan.name FROM members INNER JOIN jabatan ON members.id_jabatan = jabatan.id";
        return $this->execute($query);
    }
    
    // panggil id tertentu
    function getMembersSpesifik($id)
    {
        $query = "SELECT * FROM Members where id=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $id_jabatan = $data['id_jabatan'];
        $query = "INSERT INTO members (name, email, phone, id_jabatan) VALUES ('$name', '$email', '$phone', '$id_jabatan')";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "delete FROM Members WHERE id = '$id'";
        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id_jabatan = $_POST['id_jabatan'];
        $query = "update Members set name = '$name', email = '$email', phone='$phone', id_jabatan = '$id_jabatan' where id = '$id'";
        return $this->execute($query);
    }

}