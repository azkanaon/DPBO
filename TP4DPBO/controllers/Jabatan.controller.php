<?php
include_once("conf.php");
include_once("models/Jabatan.class.php");
include_once("views/Jabatan.view.php");

class JabatanController {
    private $jabatan;

    function __construct(){
        $this->jabatan = new Jabatan(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index() {
        $this->jabatan->open();
        $this->jabatan->getJabatan();
        $data = array();
        while($row = $this->jabatan->getResult()){
            array_push($data, $row);
        }

        $this->jabatan->close();

        $view = new JabatanView();
        $view->render($data);
    }
    // untuk melihat detail jabatan(untuk keperluan update)
    public function show($id) {
        $this->jabatan->open();
        $this->jabatan->getJabatanSpesifik($id);
        $data = array();
        while($row = $this->jabatan->getResult()){
            array_push($data, $row);
        }
        $this->jabatan->close();
        $view = new JabatanView();
        $view->renderUpdate($data);
    }

    // add
    function add($data){
        $this->jabatan->open();
        $this->jabatan->add($data);
        $this->jabatan->close();
        
        header("location:jabatan.php");
    }

    // proses edit
    function edit($id){
        $this->jabatan->open();
        $this->jabatan->edit($id);
        $this->jabatan->close();
        
        header("location:jabatan.php");
    }

    // delete
    function delete($id){
        $this->jabatan->open();
        $this->jabatan->delete($id);
        $this->jabatan->close();
        
        header("location:jabatan.php");
    }


}