<?php
 $conf = mysqli_connect("localhost","root","","crudnative");
 /*if ($conf) {
     echo "Koneksi Sukses";
 } else{
     echo "Koneksi Gagal";
 }*/

 function hapus($id){
     global $conf;
     mysqli_query($conf, "DELETE FROM binatang WHERE id=$id");
     return mysqli_affected_rows($conf);
 }
?>