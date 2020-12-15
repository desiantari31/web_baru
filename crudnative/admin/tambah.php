<?php
session_start();
if (isset($_SESSION['login_in'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet" />
</head>
<body>

<head>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">ULLL</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/deska.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#binatang">INFORMASI</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#binatang">DATA BINATANG</a></li>
                </ul>
            </div>
        </nav>
<!-- end Nav -->
</head>

<div class="container">
  <h2>Tambah Data</h2>
  <p>Silakan menambah data binatang pada form dibawah ini...!</p>
  <form class="" method="POST" action="tambah-fungsi.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama:</label>
      <div class="col-sm-10">
        <input type="nama" class="form-control" id="nama" placeholder="Nama binatang" name="nama">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jenisbinatang">Jenis Binatang:</label>
      <div class="col-sm-10">          
        <input type="jenisbinatang" class="form-control" id="jenisbinatang" placeholder="Jenis Binatang" name="jenisbinatang">
        </div>
      </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="namalatin">Nama Latin:</label>
      <div class="col-sm-10">          
        <input type="namalatin" class="form-control" id="namalatin" placeholder="Nama Latin" name="namalatin">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="tambah">Simpan</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
<?php
} else {
  header("location:../index.php");
}
?>