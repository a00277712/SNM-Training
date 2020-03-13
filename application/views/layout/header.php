<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/site.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?=site_url('home')?>">SNM Training</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=site_url('home')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('contact')?>">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('about')?>">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('report')?>">Report</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin')?>">Admin</a>
      </li>
    </ul>
  </div>
</nav>
    </header>