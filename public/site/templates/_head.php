<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= __("Sesajal"); ?> | <?= $page->title; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="canonical" href="<?= $page->httpUrl; ?>">
  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <!-- <link rel="icon" type="image/png" href="assets/images/favicon-180x180.png" sizes="128x128"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="<?= $config->urls->templates ?>assets/styles/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
  <meta name="application-name" content="<?= __("Sesajal"); ?> "/>
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $config->urls->templates ?>assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $config->urls->templates ?>assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $config->urls->templates ?>assets/images/favicon-16x16.png">
  <link rel="manifest" href="<?= $config->urls->templates ?>assets/images/site.webmanifest">
  <link rel="mask-icon" href="<?= $config->urls->templates ?>assets/images/safari-pinned-tab.svg" color="#77ac35">
  <meta name="msapplication-TileColor" content="#fcfcfc">
  <meta name="theme-color" content="#ffffff">  
  <meta name="description" content="<?= ($page->summary) ? $page->summary:$page->desc; ?>"/>
  <meta name="keywords" content="<?= $page->headline ?>"/>
  <meta property="og:locale" content="es_MX" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?= __("Sesajal"); ?> | <?= $page->title; ?>" />
  <meta property="og:image" content="<?= ($page->img2) ? $page->img2->url:$page->fondo->url;?>"/>
  <meta property="og:description" content="<?= ($page->summary) ? $page->summary:$page->desc; ?>" />
  <meta property="og:url" content="<?= $page->httpUrl; ?>" />
  <meta property="og:site_name" content="<?= __("Sesajal"); ?>" />
  <meta name="dc.language" content="es">
  <meta name="dc.source" content="<?= $page->httpUrl; ?>">
  <meta name="dc.title" content="<?= __("Sesajal"); ?> | <?= $page->title; ?>" />
  <meta name="dc.subject" content="<?= $page->headline; ?>">
  <meta name="dc.description" content="<?= ($page->summary) ? $page->summary:$page->desc; ?>">
  <link rel='dns-prefetch' href='//google-analytics.com' />
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />
  <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
  <link rel='dns-prefetch' href='//ajax.cloudflare.com' />
  <link rel='dns-prefetch' href='//ajax.googleapis.com' />
</head>
<body>