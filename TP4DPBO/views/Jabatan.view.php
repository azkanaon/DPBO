<?php
  class JabatanView{
    public function render($data){
      $no = 1;
      $dataJabatan = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $dataJabatan .= "<tr>
                  <td>" . $id . "</td>
                  <td>" . $nama . "</td>
                  <td>
                    <a href='jabatan.php?id_edit=" . $id . "' class='btn btn-success''>Edit</a>
                    <a href='jabatan.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                  </td>
                  </tr>";
      }

      $tpl = new Template("templates/jabatan.html");
      $tpl->replace("DATA_TABEL", $dataJabatan);
      $tpl->write();
    }
    
    public function renderUpdate($data){
      $no = 1;
      $dataJabatan = null;
      foreach($data as $val){
        list($id,$nama) = $val;
          $dataJabatan .= "
          <form method='post' action='jabatan.php'>
            <br><br><div class='card'>
                <div class='card-header bg-warning'>
                <h1 class='text-white text-center'>  Update Member </h1>
                </div><br>
          <input type='hidden' name='id' value='$id' class='form-control'> <br>

          <label> NAME: </label>
          <input type='text' name='name' value='$nama' class='form-control'> <br>

          <button type='submit' name='update' class='btn btn-success mb-4'>Edit</button>
          <a class='btn btn-info' type='submit' name='cancel' href='jabatan.php'> Cancel </a><br>
          </div>
        </form>
          ";
      }

      $tpl = new Template("templates/jabatanUpdate.html");
      $tpl->replace("FORM_UPDATE", $dataJabatan);
      $tpl->write();
    }
  }