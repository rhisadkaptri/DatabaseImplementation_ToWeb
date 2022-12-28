<?php
     session_start();
	if(($_SESSION['level'] != "Admin")){
    ?>
        <script>
            var yakin = confirm('Kamu bukan admin. Login dengan akun Admin?');

            if (yakin) {
                window.location = 'login.php';
            } else {
                history.back();
            }
        </script>
    <?php
	} else {
          include('koneksi.php');
          $username = $_SESSION['username'];
          $show = mysqli_query($koneksi, "select * from user where username = '$username'");
          if(mysqli_num_rows($show) == 0){
            echo '<script>window.history.back()</script>';
          } else {
            $d = mysqli_fetch_assoc($show);
          }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <!-- Favicon -->
     <link href="images/fav-icon.png" rel="icon" type="image/png">

     <title>UAS SDBL4</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style1.css">

     <style>
        .content {
            margin-left: auto;
            margin-right: auto;
            color: #232323;
            border-collapse: collapse;
        }
        
        .content, th, td {
            border: 1px solid #999;
            padding: 8px 20px;
        }
     </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    
                    <a href="index.php"><img src="images/arcane.gif" height="75px" ></a>
               </div>

               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="tambah_tempat.php" class="smoothScroll">Tambah Tempat</a></li>
                         <li><a href="logout.php" class="smoothScroll">Logout</a></li>
                    </ul>
               </div>
          </div>
     </section>
     <!-- MENU -->

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">
               <div class="owl-carousel owl-theme">

                    <div class="item item-1" style="background-image: url(images/slider1.jpg);">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-8 col-sm-12">
                                        <h3>Website (<?php echo $d['level']; ?>)</h3>
                                        <h1>Welcome , <?php echo $d['name']; ?></h1>
                                        <h3>Healing dulu guys!</h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <!-- HOME -->

     <!-- TAMBAH TEMPAT -->
     <section class="premium-section spad" id="tambah_tempat" data-stellar-background-ratio="0.5">
          <div class="container text-center">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2 style="padding-bottom:40px">Tambah Tempat</h2>
                              <div class="row">

                                <table class="content">
                                <button type="button" class="btn btn-dark mb-3" style="margin-bottom: 5px"><a href="tambah.php">Add</a></button>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Lokasi</th>
                                            <th>Rate</th>
                                            <th>Tanggal Jadi</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        include_once 'koneksi.php';
                                        $no=1;
                                        $data=mysqli_query($koneksi, "select * from tempat_wisata");
                                        while ($d=mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                        <tr>
                                             <td><?php echo $no++; ?></td>
                                             <td><?php echo $d['nama']; ?></td>
                                             <td><?php echo $d['lokasi']; ?></td>
                                             <td><?php echo $d['rate']; ?></td>
                                             <td><?php echo $d['tanggal_jadi']; ?></td>
                                             <td>
                                                  <a href="edit.php ?id=<?php echo $d['id'];?>"><img src="images/edit.png" style="height: auto; width: 25px;"></a>
                                                  <a href="hapus.php ?id=<?php echo $d['id'];?>"><img src="images/delete.png" style="height: auto; width: 25px;"></a>
                                             </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                   
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>      

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="col-md-10 col-sm-8"  style="padding: 1px 0">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#footer">Rhisa Adika Putri (191401119)</a></li>
                         </ul>
                              <p style="font-size:14px;">Fasilkom-TI | USU | 2019<p>
                         <div class="wow fadeInUp" data-wow-delay="0.8s"> 
                              <img src="images/logo.png" alt="" height="75px">
                         </div>
                               
                         
                    </div>
                    <div class="col-md-2 col-sm-4" style="padding-top:15px">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="" class="fa fa-twitter"></a></li>
                              <li><a href="" class="fa fa-instagram"></a></li>
                              <li><a href="" class="fa fa-google"></a></li>
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                            <p><br>Copyright &copy; 2021</p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>