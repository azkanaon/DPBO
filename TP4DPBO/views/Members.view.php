<?php
    class MembersView{
        public function render($data){
        $no = 1;
        $dataMember = null;
        foreach($data as $val){
            list($id,$nama,$email, $phone, $join_date,$id_jabatan ,$jabatan) = $val;
            $dataMember .= "<tr>
                    <td>" . $id . "</td>
                    <td>" . $nama . "</td>
                    <td>" . $email . "</td>
                    <td>" . $phone . "</td>
                    <td>" . $join_date . "</td>
                    <td>" . $jabatan . "</td>
                    <td>
                        <a href='index.php?id_edit=" . $id . "' class='btn btn-success''>Edit</a>
                        <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                    </td>
                    </tr>";
        }

        $tpl = new Template("templates/index.html");
        $tpl->replace("DATA_TABEL", $dataMember);
        $tpl->write();
    }
    
    public function renderUpdate($data){
        $no = 1;
        $dataMember = null;
        $dataJabatan = null;
        $simpanJabatan = 0;
        foreach($data['members'] as $val){
            list($id,$nama,$email, $phone,$id_jabatan) = $val;
            $dataMember .= "
            
            <input type='hidden' name='id' value='$id' class='form-control'> <br>
            <label> NAME: </label>
            <input type='text' name='name' value='$nama' class='form-control'> <br>
            <label> EMAIL: </label>
            <input type='text' name='email' value='$email' class='form-control'> <br>
            <label> PHONE: </label>
            <input type='text' name='phone' value='$phone' class='form-control'> <br>
            ";
            $simpanJabatan = $id_jabatan;
        }

        
        foreach($data['jabatan'] as $val){
            list($id, $nama) = $val;
            if($id == $simpanJabatan){
                $dataJabatan .= "<option selected value='".$id."'>".$nama."</option>";
            }else{
                $dataJabatan .= "<option value='".$id."'>".$nama."</option>";
            }
        }

        $tpl = new Template("templates/indexUpdate.html");
        $tpl->replace("FORM_UPDATE", $dataMember);
        $tpl->replace("OPTION", $dataJabatan);
        $tpl->write();
    }
    
    public function optionForm($data){
        $dataJabatan = null;
        foreach($data as $val){
            list($id, $nama) = $val;
            $dataJabatan .= "<option value='".$id."'>".$nama."</option>";
        }

        $tpl = new Template("templates/indexAdd.html");
        $tpl->replace("OPTION", $dataJabatan);
        $tpl->write();
    }

    
}