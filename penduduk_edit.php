<?php
include'header.php';
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_warga WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
$pendidikan=$data['kode'];
$agama=$data['kode'];
$lurah=$data['kode'];
$pekerjaan=$data['kode'];
?>
 <section class="content">
      <div class="row">
       <div class="col-md-6">
          <div class="box box-succsess">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit</h3>
            </div>
              <form method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label>NIK *</label>
                  <input type="text" maxlength="16" class="form-control" name="txtnik"  value="<?php echo $data['nik'] ?>" placeholder="Input NIK" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Nama *</label>
                  <input type="text" class="form-control" name="txtnama"  value="<?php echo $data['nama'] ?>" placeholder="Input"  required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>
                   <div class="form-group">
                  <label>Tempat Lahir *</label>
                  <input type="text" class="form-control" name="txttempatlahir" value="<?php echo $data['tempat_lahir'] ?>" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Tgl Lahir *</label>
                  <input type="date" class="form-control" id="date" name="txttanggal" value="<?php echo $data['tgl_lahir'] ?>" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


                   <div class="form-group">
                  <label>Jenis Kelamin *</label>
                     <?php $cbjeniskelamin = $data['jenis_kelamin']; ?>
                       <select name="cbjeniskelamin" class="form-control">
                            <option <?php echo ($cbjeniskelamin == 'Laki-Laki') ? "selected": "" ?>>Laki-Laki</option>
                            <option <?php echo ($cbjeniskelamin == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
                      </select>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Status Kawin *</label>
                   <?php $cbstatus = $data['status_kawin']; ?>
                       <select name="cbstatus" class="form-control">
                            <option <?php echo ($cbstatus == 'Belum Menikah') ? "selected": "" ?>>Belum Menikah</option>
                            <option <?php echo ($cbstatus == 'Sudah Menikah') ? "selected": "" ?>>Sudah Menikah</option>
                      </select>
                </div>
                <div class="form-group">
                  <label>Alamat *</label>
                    <textarea class="form-control" name="txtalamat"><?php echo $data['alamat'] ?></textarea>
                </div>
                <br> <br>
                 <div class="form-group">
                  <label>Jenis Penduduk *</label>
                    <?php $cbjenispenduduk = $data['jenis']; ?>
                  <select name="cbjenispenduduk" class="form-control">
                        <option <?php echo ($cbjenispenduduk == 'Tetap') ? "selected": "" ?>>Tetap</option>
                        <option <?php echo ($cbjenispenduduk == 'Pendatang') ? "selected": "" ?>>Pendatang</option>
                        <option <?php echo ($cbjenispenduduk == 'Meninggal') ? "selected": "" ?>>Meninggal</option>
                        <option <?php echo ($cbjenispenduduk == 'Pindah') ? "selected": "" ?>>Pindah</option>
                        <option <?php echo ($cbjenispenduduk == 'Lahir') ? "selected": "" ?>>Lahir</option>
                  </select>
                </div>

                  </div>
                 
          </div>
        </div>

        <!-- Halaman KE II -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
          
              <div class="box-body">
              


                <div class="form-group">
                  <label>Pekerjaan *</label>
                  <select name="cbpekerjaan" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_pekerjaan"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>


                <div class="form-group">
                  <label>Pendidikan</label>
                  <select name="cbpendidikan" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_pendidikan"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>


                <div class="form-group">
                  <label>Agama</label>
                  <select name="cbagama" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_agama"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Kelurahan/Desa *</label>
                  <select name="cblurah" class="form-control">
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_lurah"); 
                      while ($d=mysqli_fetch_array($qry)) { ?>
                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                      </option><?php } ?>
                  </select>
                </div>

                 <div class="form-group">
                  <label>Kecamatan *</label>
                  <input type="text" class="form-control" name="txtkecamatan" value="Cilamaya" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                 <div class="form-group">
                  <label>Kabupaten</label>
                  <input type="text" class="form-control" name="txtkabupaten" value="Karawang" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                 <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" class="form-control" name="txtprovinsi" value="Jawa Barat" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>

                   <div class="form-group">
                  <label>Negara</label>
                  <input type="text" class="form-control" name="txtnegara" value="Indonesia" placeholder="Input" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                </div>


              </div>
              <div class="box-footer">
               <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </form>
            </form>

             <?php
          if (isset($_POST["btnsimpan"])){
                  $cblurah =$_POST['cblurah'];
                  $cbpekerjaan =$_POST['cbpekerjaan'];
                  $cbpendidikan =$_POST['cbpendidikan'];
                  $cbagama =$_POST['cbagama'];
                  $txtnik =$_POST['txtnik'];
                  $txtnama =$_POST['txtnama'];
                  $txttanggal =$_POST['txttanggal'];
                  $cbjeniskelamin =$_POST['cbjeniskelamin'];
                  $txtalamat =$_POST['txtalamat'];
                  $txtkecamatan =$_POST['txtkecamatan'];
                  $txtkabupaten =$_POST['txtkabupaten'];
                  $txtprovinsi =$_POST['txtprovinsi'];
                  $txtnegara =$_POST['txtnegara'];
                  $cbstatus =$_POST['cbstatus'];
                  $txttempatlahir =$_POST['txttempatlahir'];
                  $cbjenispenduduk = $_POST['cbjenispenduduk'];
                    $edit = mysqli_query($konek,"UPDATE  tbl_warga SET nik='$txtnik',nama='$txtnama',kd_lurah='$cblurah',kd_pekerjaan='$cbpekerjaan',kd_pendidikan='$cbpendidikan',kd_agama='$cbagama',tgl_lahir='$txttanggal',jenis_kelamin='$cbjeniskelamin',alamat='$txtalamat',kecamatan='$txtkecamatan',kabupaten='$txtkabupaten',provinsi='$txtprovinsi',negara='$txtnegara',status_kawin='$cbstatus',tempat_lahir='$txttempatlahir',jenis='$cbjenispenduduk' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                alert('Data Berhasil di Edit');
                document.location.href="penduduk_tampil.php";

              </script>
              <?php
            }else{
              echo "Terjadi kesalahan";
            }
          }
        ?>
            </div>
          </div>
    </div>
</section>
 </div>
<?php include'footer.php'; ?>


