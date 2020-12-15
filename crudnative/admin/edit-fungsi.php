<?php
include "../koneksi.php";
if (isset($_POST['edit'])) {

    $insertSql = mysqli_query($conf, "UPDATE binatang SET 
        nama = $_POST[nama],
        jenisbinatang = $_POST[jenisbinatang],
        namalatin = $_POST[namalatin]";
if ($insertSql) {
    echo "<script type='text/javascript'>alert('Data berhasil disimpan...!'); location.href=\"home.php\";</script>";
}
}
?>