<?php 
    include "Human.php";
    // kelas ini merupakan anak dari human
    class SivitasAkademik extends Human {
        // buat variabel dlu
        protected $asalUniv = '';
        protected $emailEdu = '';
        
        // konstruktor
        public function __construct($nik = "", $nama = "", $gender = "", $asalUniv = "", $emailEdu = ""){
            // mengambil semua variabel yang terdapat pada parentnya
            parent::__construct($nik, $nama, $gender);
            // variabel milik sivitas akademik
            $this->asalUniv = $asalUniv;
            $this->emailEdu = $emailEdu;
        }
        
        // Getter
        public function getAsalUniv(){
            return $this->asalUniv;
        }
        public function getEmailEdu(){
            return $this->emailEdu;
        }
        
        // Setter
        public function setAsalUniv($asalUniv){
            $this->asalUniv = $asalUniv;
        }
        public function setEmailEdu($emailEdu){
            $this->emailEdu = $emailEdu;
        }

        // Destruktor
        public function __destruct(){
        }
    }
    


?>