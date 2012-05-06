<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php echo $header['title']; ?></title>
  <meta name="description" content="">
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">
  <!-- Kills the IE6 image toolbar popup -->
  <meta http-equiv="imagetoolbar" content="false" />
  <!-- Ensures the devices display responsive pages properly -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- IE9 pinned page settings -->
  <meta name="application-name" content="Tomhoudmont.com" />
  <meta name="msapplication-starturl" content="http://tomhoudmont.com" />
  <!-- A couple of the most basic Facebook open graph tags -->
  <meta property="og:title" content="tomhoudmont.com" />
  <meta property="og:description" content="The personal website of Tom Houdmont" />
<?php
  //@TODO
  //<!-- Canonical URLs -->
  //<link rel="canonical" href="" />
?>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo ENV_PATH; ?>favicon.ico">
  <!-- Humans.txt -->
  <link rel="author" href="<?php echo ENV_PATH; ?>humans.txt" />
  <!-- Stylesheets and Fonts -->
  <link rel="stylesheet" href="<?php echo ENV_PATH; ?>css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ENV_PATH; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo ENV_PATH; ?>css/bootstrap-responsive.css">
  <link href='http://fonts.googleapis.com/css?family=Cabin|Lobster' rel='stylesheet' type='text/css'>

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
  <script src="<?php echo ENV_PATH; ?>js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div class="container">