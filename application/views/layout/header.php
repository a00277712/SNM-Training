<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/site.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>

  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
    <?php 

function echoActiveIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'active';
}

?>
<body>
    <header>
      <div class="banner-img">
        <!--<img src="<?php echo base_url(); ?>img/banner.webp" alt="banner">-->
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
     </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>img/ny.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>img/banner.webp" alt="Chicago">
    </div>
   
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?=site_url('home')?>">SNM Training</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?=echoActiveIfRequestMatches("contact")?>">
                <a class="nav-link" href="<?=site_url('contact')?>">Contact Us</a>
            </li>
            <li class="nav-item <?=echoActiveIfRequestMatches("about")?>">
                <a class="nav-link" href="<?=site_url('about')?>">About Us</a>
            </li>
            <li class="nav-item <?=echoActiveIfRequestMatches("report")?>">
                <a class="nav-link" href="<?=site_url('report')?>">Report</a>
            </li>
            <li class="nav-item <?=echoActiveIfRequestMatches("admin")?>">
              <a class="nav-link" href="<?=site_url('admin')?>">Admin</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
