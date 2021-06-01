<?php
error_reporting(error_reporting() & ~E_NOTICE);
session_start();
require"db.php";
$email="";
if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
	$sessionName = $_SESSION['name'];
	$email=$_SESSION['email'];
	$sql="SELECT id,name,file,role FROM user Where email='$email'";
	$query=mysqli_query($conn,$sql);
	$result=mysqli_fetch_array($query);
}else{
	$sessionName = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InnogenX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Multi - v2.2.1
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
       
      <h1 class="logo mr-auto"><a href="index.html">InnogenX</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
		<?php if($_SESSION['name']!=''){?>
          <li class="active"><a href="home.php"><b>Home</b></a></li>
          <li><a href="#about"><b>About</b></a></li>
          <li><a href="#services"><b>Services</b></a></li>
          <li><a href="#portfolio"><b>Portfolio</b></a></li>
          <li><a href="#team"><b>Team</b></a></li>
          <li><a href="#contact"><b>Contact</b></a></li>
          <li><a href="logout.php"><b>Logout</b></a></li>
		  <?php if($result['role']==2){?>
          <a href="user_profile.php" class="get-started-btn"><b>User Profile</b></a>
		  <?php }else{?>
		   <a href="admin_profile.php" class="get-started-btn"><b>Admin Profile</b></a>
		  <?php }?>
		  <?php }?>
		  
		  

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->