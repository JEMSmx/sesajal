<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo $page->title; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400|Roboto:400,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha256-AIodEDkC8V/bHBkfyxzolUMw57jeQ9CauwhVW6YJ9CA=" crossorigin="anonymous" rel="stylesheet">
  <link href="https://cdn.rawgit.com/cobyism/gridism/0.2.2/gridism.css" rel="stylesheet">
  <link href="<?php echo $config->urls->templates; ?>static/455375-147357/styles/main.css" rel="stylesheet">
  <!-- <link href="<?php echo $config->urls->templates; ?>static/455375-147357/styles/anotherone.css" rel="stylesheet"> -->

  <link rel="apple-touch-icon" href="<?php echo $config->urls->templates; ?>static/455375-147357/images/favicon-180x180.png">
  <link rel="shortcut icon" href="<?php echo $config->urls->templates; ?>static/455375-147357/images/favicon-64x64.png">
</head>

<body class="<?php echo k::page_name(); ?>">

  <!-- Header -->
  <header class="k-header">
    <div class="wrap wider grid">
      <div class="k-container">
        <a href="/" class="k-logo"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/krrrunch-logo.png" alt="Krrrunch — E-Commerce the right way"></a>

        <nav class="k-navbar">
          <ul>
            <li><a href="/work/">Work</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/about/">About</a></li>
            <li class="k-navbar-button"><a href="/contact/">Contact</a></li>
          </ul>

          <div class="k-navbar-controls">
            <svg class="k-navbar-close"><use fill="currentcolor" xlink:href="#k-svg-icon-close"></use></svg>
            <svg class="k-navbar-hamburger"><use fill="currentcolor" xlink:href="#k-svg-icon-drawer"></use></svg>
          </div>
        </nav>

      </div>
    </div>
  </header>

  <!-- Header Alt -->
  <!--   <header class="k-header">
    <div class="wrap wider grid">
      <div class="k-container">
        <a href="/" class="k-logo"><img src="<?php echo $config->urls->templates; ?>static/455375-147357/images/krrrunch-logo.png" alt="Krrrunch — E-Commerce the right way"></a>

        <nav class="k-navbar">
          <ul>
            <li><a href="/work/">Work</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/about/">About</a></li>
            <li class="k-navbar-button"><a href="/contact/">Contact</a></li>
          </ul>

          <div class="k-navbar-controls">
            <svg class="k-navbar-close"><use fill="currentcolor" xlink:href="#k-svg-icon-close"></use></svg>
            <svg class="k-navbar-hamburger"><use fill="currentcolor" xlink:href="#k-svg-icon-drawer"></use></svg>
          </div>
        </nav>
      </div>
    </div>

    <div class="k-page-header">
      <h1 class="k-heading">Header H1</h1>
      <p>Nullam enim lorem, ultricies vel pulvinar id, tempus sit amet dolor.</p>
    </div>
  </header> -->

