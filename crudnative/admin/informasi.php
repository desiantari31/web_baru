<?php
include "../koneksi.php";
session_start();
$tampil = mysqli_query($conf, "SELECT * FROM binatang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Binatang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
</head>
 
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">ULLL</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/deska.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="informasi.php">INFORMASI</a></li>
                </ul>
            </div>
        </nav>
<!-- end Nav -->

    <head>
        <h2>INFORMASI BINATANG</h2>
            <p>
            <h2>1. SERIGALA</h2>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/serigala.jpg" alt="" /></span>
                Serigala abu-abu atau serigala (bahasa Latin: Canis lupus) adalah binatang mamalia karnivora. 
            Serigala abu-abu mempunyai asal usul yang sama dengan anjing luar negeri dari keluarga Canis lupus melalui bukti pengurutan DNA dan penyelidikan genetika. 
            Beberapa jenis anjing juga memiliki bentuk fisik yang mirip dengan serigala, contohnya anjing jenis Siberian Husky, Malamut Alaska dan Samoyed. 
            Secara umum, serigala mempunyai tinggi sekitar 60 cm hingga 80 cm (26-32 inci) dan berat sekitar 23–59 kilogram. 
            </p>
    </head>
       
    <head>
            <p>
            <h2>2. KUCING</h2>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/cat.jpg" alt="" /></span>
                Kucing, dalam bahasa latinnya Felis silvestris catus, adalah hewan karnivora. 
            Kucing telah berbaur dengan kehidupan manusia paling tidak sejak 6.000 tahun SM, dari kerangka kucing di Pulau Siprus.
            Orang Mesir Kuno dari 3.500 SM telah menggunakan kucing untuk menjauhkan tikus atau hewan pengerat lain dari lumbung penyimpan hasil panen.
            </p>
    </head>

    <head>
            <p>
            <h2>3. ANJING LAUT</h2>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images/anjinglaut.jpg" alt="" /></span>
                Anjing laut adalah mamalia besar dari ordo karnivora yang hidup di daerah sejuk. 
            Pada awalnya, anjing laut termasuk ke dalam subordo Pinnipedia, tetapi sekarang kategori subordo ini telah bergeser menjadi kategori superfamilia.
            Saat ini, anjing laut dimasukkan ke dalam subordo Caniformia bersama famili Odobenidae (beruang laut / walrus), Otariidae (singa laut), dan Phocidae. 
            Analisis molekular terkini telah membuktikan bahwa anjing laut merupakan kerabat terdekat beruang. 
            Hipotesis lainnya mengatakan bahwa anjing laut merupakan polifiletik dengan anjing laut sejati berasal dari nenek moyang berupa hewan seperti berang-berang sedangkan 
            jenis anjing laut lainnya berasal dari nenek moyang berupa hewan seperti beruang, tetapi studi molekular terkini yang telah disebutkan sebelumnya meyakinkan bahwa semua jenis anjing laut adalah monofiletik, 
            yaitu berasal dari satu nenek moyang yang sama.
            </p>
    </head>  
   </tbody>
  </table>
  <p><a href="../logout.php"><button type="button" class="btn btn-info">Logout</button></a></p>
</div>
</body>
</html>