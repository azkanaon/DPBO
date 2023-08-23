<?php 
    include "SivitasAkademik.php";
    // kelas ini merupakan anak dari sivitas akademik sekaligus cucu dari human
    class Mahasiswa extends SivitasAkademik{
        // buat variabel dlu
        protected $nim = '';
        protected $prodi = '';
        protected $fakultas = '';
        
        // konstruktor
        public function __construct($nik = "", $nama = "", $gender = "", $asalUniv = "", $emailEdu = "", $nim = "", $prodi = "", $fakultas = ""){
            // mengambil semua variabel yang terdapat pada parentnya
            parent::__construct($nik, $nama, $gender, $asalUniv, $emailEdu);
            // variabel milik mahasiswa
            $this->nim = $nim;
            $this->prodi = $prodi;
            $this->fakultas = $fakultas;
        }

        // Getter
        public function getNim(){
            return $this->nim;
        }
        public function getProdi(){
            return $this->prodi;
        }
        public function getFakultas(){
            return $this->fakultas;
        }

        // Setter
        public function setNim($nim){
            $this->nim = $nim;
        }
        public function setProdi($prodi){
            $this->prodi = $prodi;
        }
        public function setFakultas($fakultas){
            $this->fakultas = $fakultas;
        }

        // Destruktor
        public function __destruct(){
        }
    }



?>