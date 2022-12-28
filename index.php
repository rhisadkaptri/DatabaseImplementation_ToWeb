<?php
     session_start();
	if(!isset($_SESSION['username'])){
          header("location: login.php");
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
     <link rel="stylesheet" href="css/style3.css">

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
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Profile</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>
     <!-- HOME -->

     <!-- PROFILE -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Profile</h2>
                              <h4>You can call me "Rhisa"</h4>
                         </div>
                    </div>

                         <div class="col-md-4 col-sm-4"></div>
                         
                         <div class="col-md-4 col-sm-4">
                              <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                                   <img src="images/profile.jpg" class="img-rounded" alt="">
                                        <div class="team-hover">
                                             <div class="team-item">
                                                  <h4>Everything is gonna be okay :)</h4> 
                                                  <ul class="social-icon">
                                                       <li><a href="https://www.instagram.com/rhisadkaptri/" target="_blank" class="fa fa-instagram"></a></li>
                                                  </ul>
                                             </div>
                                        </div>
                              </div>
                              <div class="team-info">
                                   <h3>Rhisa Adika Putri</h3>
                                   <p>191401119</p>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4"></div>

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