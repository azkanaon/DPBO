<?php

class Mahasiswa {
    // membuat private
    private $nama = "";
    private $nim = "";
    private $prodi = "";
    private $fakultas = "";
    
    // bikin konstruktor
    function __construct($nama = "", $nim = "", $prodi = "", $fakultas = "") {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }
    
    // Getter dan Setter
    // Get nama
    function get_nama() {
        return $this->nama;
    }
    // Set nama
    function set_nama($nama) {
        $this->nama = $nama;
    }
    
    // Get nim
    function get_nim() {
        return $this->nim;
    }
    // Set nim
    function set_nim($nim) {
        $this->nim = $nim;
    }

    // Get prodi
    function get_prodi() {
        return $this->prodi;
    }
    // Set prodi
    function set_prodi($prodi) {
        $this->prodi = $prodi;
    }

    // Get fakultas
    function get_fakultas() {
        return $this->fakultas;
    }
    // Set fakultas
    function set_fakultas($fakultas) {
        $this->fakultas = $fakultas;
    }

    // Destruktor
    function __destruct(){
    }
}
?>