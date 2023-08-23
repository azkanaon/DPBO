<?php 
class Human{
    // buat variabel dlu
    protected $nik = '';
    protected $nama = '';
    protected $gender = '';

    // konstruktor
    public function __construct($nik = "", $nama = "", $gender = ""){
        $this->nik = $nik;
        $this->nama = $nama;
        $this->gender = $gender;
    }

    // Getter
    public function getNik(){
        return $this->nik;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getGender(){
        return $this->gender;
    }
    
    //Setter
    public function setNik($nik){
        $this->nik = $nik;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }

    // Destruktor
    function __destruct(){
    }



    
}


?>