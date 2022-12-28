<?php
    include('koneksi.php');
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "select * from tempat_wisata where id = '$id'");
    if(mysqli_num_rows($show) == 0){
      echo '<script>window.history.back()</script>';
    } else {
      $d = mysqli_fetch_assoc($show);
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
                    
                    <a href="index.php"><img src="images/logo.png" height="75px" ></a>
               </div>

               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="tempat_wisata.php" class="smoothScroll">Tempat Wisata</a></li>
                         <li><a href="tambah_tempat.php" class="smoothScroll">Tambah Tempat</a></li>
                         <li><a href="#team" class="smoothScroll">About Me</a></li>
                         <li><a href="logout.php" class="smoothScroll">Logout</a></li>
                    </ul>
               </div>
          </div>
     </section>
     <!-- MENU -->

     <!-- TAMBAH TEMPAT -->
     <section id="portfolio" class="portfolio section-bg mb-5" style="margin-top: 50px">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="container" style="height:500px;width:500px">
            <h3 class="text-center">
            <a href="management.php">Back</a>
            <p>Edit Data</p>
            </h3>
            <form action="edit_proses.php" method="post">

                <div class="form-group row">
                    <div class="col-sm-8">
                        <input type="hidden" class="form-control" name="id" size="30"  value="<?php echo $d['id']; ?>" required readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama" size="30" value="<?php echo $d['nama']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Lokasi</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="lokasi" size="255" value="<?php echo $d['lokasi']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Rate</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="rate">
                        <option value="">Select</option>
                        <option value="1" <?php if($d['rate'] == '1'){echo 'selected';}?> >1</option>
                        <option value="2" <?php if($d['rate'] == '2'){echo 'selected';}?> >2</option>
                        <option value="3" <?php if($d['rate'] == '3'){echo 'selected';}?> >3</option>
                        <option value="4" <?php if($d['rate'] == '4'){echo 'selected';}?> >4</option>
                        <option value="5" <?php if($d['rate'] == '5'){echo 'selected';}?> >5</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Tanggal Jadi</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="tanggal_jadi" size="30"  value="<?php echo $d['tanggal_jadi']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-11">&nbsp;</div>
                    <div class="col-sm-1"><input type="submit" name="simpan" value="Edit"></div>
                </div>
            </form>
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