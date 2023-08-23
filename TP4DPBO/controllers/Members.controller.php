<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("models/Jabatan.class.php");
include_once("views/Members.view.php");

class MembersController {
    private $members;
    private $jabatan;

    function __construct(){
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->jabatan = new Jabatan(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index() {
        $this->members->open();
        $this->members->getMembers();
        $data = array();
        while($row = $this->members->getResult()){
            array_push($data, $row);
        }
        $this->members->close();
        
        $view = new MembersView();
        $view->render($data);
    }
    
    // untuk menampilkan banyak jabatan di option add
    public function showJabatan() {
        $this->jabatan->open();
        $this->jabatan->getJabatan();
        $data = array();
        while($row = $this->jabatan->getResult()){
            array_push($data, $row);
        }
        $this->jabatan->close();

        $view = new MembersView();
        $view->optionForm($data);
    }
    
    // show data member dan jabatan untuk keperluan update
    public function show($id) {
        $this->members->open();
        $this->jabatan->open();
        $this->members->getMembersSpesifik($id);
        $this->jabatan->getJabatan();
        $data = array(
            'members' => array(),
            'jabatan' => array(),
        );
        while($row = $this->members->getResult()){
            array_push($data['members'], $row);
        }
        while($row = $this->jabatan->getResult()){
            array_push($data['jabatan'], $row);
        }
        $this->members->close();
        $this->jabatan->close();
        $view = new MembersView();
        $view->renderUpdate($data);
    }

    // add
    function add($data){
        $this->members->open();
        $this->members->add($data);
        $this->members->close();
        
        header("location:index.php");
    }

    // edt
    function edit($id){
        $this->members->open();
        $this->members->edit($id);
        $this->members->close();
        
        header("location:index.php");
    }

    // delete
    function delete($id){
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();
        
        header("location:index.php");
    }


}