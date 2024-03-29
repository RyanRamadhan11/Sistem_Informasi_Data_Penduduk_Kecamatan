<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN DATA PENDUDUK </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
<style type="text/css">
    * {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  color: #333;
  overflow-x: hidden;
}
.head {
  height: 100vh;
  display: flex;
  align-items: center;
  color: #fff;
}
.wrapper {
  max-width: 100%;
  margin: auto;
  text-align: center;
}
.box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}
.box video {
  min-width: 100%;
  min-height: 100%;
}
.header-overlay {
  height: 100vh;
  width: 100vw;
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 45, 1);
  background: rgba(0, 0, 45, 1)
  z-index: 1;
  opacity: 0.85;
}
.content {
  z-index: 99;
  width: 100%;
  margin: auto;
}
.content h1{
  font-size: 50px;
}
a {
  border: 2px solid #f90;
  color: #fff;
  font-size: 1.2rem;
  padding: 10px;
  text-decoration: none;
}


</style>
</head>
<body class="hold-transition login-page">

  <header class="wrapper head">
    <div class="box">
      <video src="animasi.mp4" autoplay loop="true"></video>
    </div>
    <div class="content">
    <div class="login-box">
  <div class="login-logo">
    <H2> SILAKAN PILIH LOGIN </H2>
  </div>
     <form action="indekloginadmin.php" method="post">
        <div class="col-xs-5">
          <button type="submit" name="btnlogin" class="btn btn-primary btn-block btn-flat">LOGIN ADMIN</button> <br><br>
        </div>
     </form>
     <form action="indekloginwarga.php" method="post">
        <div class="col-xs-5">
          <button type="submit" name="btnlogin" class="btn btn-primary btn-block btn-flat">LOGIN WARGA</button> <br><br>
        </div>
     </form>
  </div>
  
</div>
    </div>
  </header>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

