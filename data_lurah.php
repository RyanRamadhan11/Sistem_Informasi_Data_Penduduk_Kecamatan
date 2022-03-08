<?php
include'headerwarga.php';
?>
 <section class="content">
     
    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Kelurahan/Desa</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th width="10%">NO</th>
                  <th>URAIAN</th>
                  <th width="10%">Action</th>
                </tr>
                <?php
                    $no =1;
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_lurah");
                        while ($data=mysqli_fetch_array($qry)) {
                  ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['uraian']; ?></td>
                  
                </tr>
                <?php } ?>

              </table>
                    </div>
          

 </section>
  </div>
<?php
include'footer.html';
?>
