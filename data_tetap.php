<?php include'headerwarga.php';
error_reporting(0);
?>

      <br>
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
            <form action="" method="POST">
            <div class="form-group">
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="query" placeholder="Cari NIK/Nama" required oninvalid="this.setCustomValidity('Input Pencarian NIK atau Nama Penduduk')" oninput="setCustomValidity('')" />
                  </div>

                  <div class="col-sm-2">
                    <input type="submit" name="cari" class="btn btn-primary pull-right" value="Cari">

                  </div>
                </div>
                </form>
            </div>

            </div>
        </div>


       


<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penduduk Tetap</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th width="5%">NO</th>
                  <th>NIK</th>
                   <th>Nama</th>
                   <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                     <th>Alamat</th>
              
                </tr>
        <?php
            $no =1;
            $query = $_POST['query'];
            if ($query !=''){
                $select = mysqli_query($konek, "SELECT * FROM v_tetap WHERE nik LIKE '%".$query."%' OR nama LIKE '%".$query."%'");
            }else {
               $select=mysqli_query($konek,"select * from v_tetap");
            }
            if(mysqli_num_rows($select)){
                while ($data=mysqli_fetch_array($select)){
        ?>

                                         <td align="left"> <?php echo $no++; ?> </td>
                                      
                                        <td align="left"> <?php echo $data['nik'];  ?></td>
                                        <td align="left"> <?php echo $data['nama'];  ?></td>
                                        <td align="left"> <?php echo $data['tgl_lahir'];  ?></td>
                                        <td align="left"> <?php echo $data['jenis_kelamin'];  ?></td>
                                        <td align="left"> <?php echo $data['alamat'];  ?></td>
                                      
                                        
                                        </tr>
            <?php }}else{
      echo "Try Again";}
    ?>


              </table>
        </div>
        </div>

        <form method="POST" action="">
   <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Penduduk Tetap</h4>
              </div>
              <div class="modal-body">
                     <div class="form-group">
                  <select name="cbpenduduk" class="form-control">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_warga where jenis='Tetap'"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['nama']; ?>
                                      </option>
                                    <?php } ?>
                            </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="SET PENDUDUK TETAP"> 
              </div>
            </div>
          </div>
        </div>
</form>
    
 </section>
  </div>


   


<?php include'footer.php'; ?>