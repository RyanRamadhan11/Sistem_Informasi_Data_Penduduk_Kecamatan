<?php
include'header.php';
?>
 <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="pindah_tampil.php">Tampil | </a> Tambah Data Penduduk Pindah</h3>
            </div>

            <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Penduduk Pindah</label>
                  <div class="col-sm-10">
                            <select name="cbpenduduk" class="form-control">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_warga where jenis='Pindah'"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['nama']; ?>
                                      </option>
                                    <?php } ?>
                            </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Pindah</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="txtalamat" name="txttanggal" placeholder="Tgl Kematian"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat Pindah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtalamat" placeholder="Alamat Pindah"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtkecamatan" placeholder="Kecamatan Pindah"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan/Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtalamat" name="txtlurah" placeholder="Lurah Pindah"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alasan Pindah</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalasan"></textarea>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                  <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan"> 
              </div>
              </form>

      <?php
          if (isset($_POST["btnsimpan"])){
            $cbpenduduk =$_POST['cbpenduduk'];
            $txttanggal =$_POST['txttanggal'];
            $txtalasan=$_POST['txtalasan'];
            $txtlurah=$_POST['txtlurah'];
            $txtalamat=$_POST['txtalamat'];
            $txtkecamatan=$_POST['txtkecamatan'];
            $cek_user = mysqli_num_rows(mysqli_query($konek,"select * from tbl_pindah where kd_warga = '$cbpenduduk'"));
            if ($cek_user > 0) {
              echo "<h4>Nama Penduduk Sudah Ada</h4>";
            }else {

            $simpan = mysqli_query($konek,"INSERT INTO tbl_pindah (kd_warga,alasan_pindah,alamat_pindah,kecamatan,lurah,tgl_pindah) VALUES ('$cbpenduduk','$txtalasan','$txtalamat','$txtkecamatan','$txtlurah','txttanggal')");
            if ($simpan){
              ?>
              <script type="text/javascript">
                alert('Data Berhasil di Simpan');
                document.location.href="pindah_tampil.php";
              </script>
              <?php
            }else{
              echo "Gagal Untuk Menyimpan";
            }
        }
      } // }Akhir data double pat 
        ?>
        </div>
    </div>
 </section>
  </div>
<?php
include'footer.html';
?>