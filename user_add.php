<?php
include'header.php';
?>
 <section class="content">
      <div class="row">
       
       </div>
       <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Admin</h3>
            </div>
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <th width="10%">NO</th>
                  <th>Nama Admin</th>
                  <th width="10%">Action</th>
                </tr>
                <?php
                    $no =1;
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_user");
                        while ($data=mysqli_fetch_array($qry)) {
                  ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['user_name']; ?></td>
                  
                 <td><a href="user_edit.php?id=<?php echo base64_encode($data['kode']); ?>">Edit</a> | <a onClick="return confirm('Yakin Anda Menghapus ?')" href="user_hapus.php?id=<?php echo $data['kode']; ?>">Hapus</a></td>

                </tr>
                <?php } ?>

              </table>
             </div>
 </section>
  </div>
<?php
include'footer.html';
?>