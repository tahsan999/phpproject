<?php 
session_start();
require 'db.php';

//logo
$select_logo = "SELECT * FROM logos";
$select_logo_res = mysqli_query($db_connect, $select_logo);
$after_assoc_logo = mysqli_fetch_assoc($select_logo_res);

//about
 $about = "SELECT * FROM abouts";
 $about_res = mysqli_query($db_connect, $about);
 $about_assoc_abouts = mysqli_fetch_assoc($about_res);

 //service
$select_service1 = "SELECT * FROM services LIMIT 3";
$select_service_res1 = mysqli_query($db_connect, $select_service1);
 //service page
$select_service = "SELECT * FROM services";
$select_service_res = mysqli_query($db_connect, $select_service);

//portfolio
$select_portfolio = "SELECT * FROM portfolios";
$select_portfolio_res = mysqli_query($db_connect, $select_portfolio);

//footer
$select_footer = "SELECT * FROM footer";
$select_footer_res = mysqli_query($db_connect, $select_footer);
$after_assoc_footer = mysqli_fetch_assoc($select_footer_res);

//skill
$select_skill = "SELECT * FROM skills";
$select_skill_res = mysqli_query($db_connect, $select_skill);

 ?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="description"
      content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4"
    />

    <meta name="author" content="themeturn.com" />

    <title>Ratsaan| Creative portfolio template</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <!-- Themeify Icon Css -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css" />
    <link rel="stylesheet" href="plugins/aos/aos.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css" />
    <link
      rel="stylesheet"
      href="plugins/owl/assets/owl.theme.default.min.css"
    />
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
      rel="stylesheet"
      href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body class="portfolio" id="top">
    <!-- Navigation start -->
    <!-- Header Start -->

    <nav
      class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation"
      id="navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="uploads/logo/<?=$after_assoc_logo['logo']?>" width="100" alt="">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarsExample09"
          aria-controls="navbarsExample09"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="ti-view-list"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoth-scroll" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoth-scroll" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoth-scroll" href="portfolio.php">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link smoth-scroll" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navigation End -->