<?php

ini_set("display_errors","Off");
include "header.php";
include "menu.php";

include("../connect.php");

?>


    <?php
    
    $id=$_GET['idk'];
    $show_kelas="SELECT * FROM atribut WHERE id_atribut='$id'";
    $hasil_kelas=mysql_query($show_kelas,$koneksi);
    $view_kelas=mysql_fetch_row($hasil_kelas);

    ?>


<div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ubah Data Atribut </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Ubah Data Atribut
                        </div>
                        <div class="panel-body">


                             <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <label>Id Atribut</label>
                                <input readonly type="text" class="form-control" name="id-atribut" value="<?php print($view_kelas[0]);?>"/>
                              </div>
                              <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="Keterangan" value="<?php print($view_kelas[1]);?>"/>
                              </div>
                              <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Simpan" />
                                <a class="btn btn-warning" href="atribut.php">Kembali</a>
                              </div>
                              
                            </form>
  
                            </div>
                            </div>
                    </div>
 
                </div>
        </div>
    </div>



<?php
    include "footer.php";
?>


