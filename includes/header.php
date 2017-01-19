<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
    <meta name="author" content="The Top Shelf Specialists">

    <meta property="og:title" content="<?php echo $pageTitle; ?>" >
    <meta property="og:description" content="<?php echo $pageDescription; ?>" >
    <meta property="og:type" content="website" >
    <meta property="og:url" content="<?php echo $pageUrl; ?>" >
    <meta property="og:site_name" content="The Top Shelf Specialists | Manchester Bar Consultancy" >

    <link href="<?php echo $cssPath; ?>" type="text/css" rel="stylesheet"/>

  </head>


<body>

<header role="banner">

  <a href="index.php" title="Go to the home page">

    <svg class="logo center">
        <use xlink:href="img/sprite.svg#logo"></use>
    </svg>

  </a>

  <nav role="navigation">
      <div class="nav-btn">

        <div id="burger-container">
          <div id="burger">
            <span>&nbsp;</span>
            <span>&nbsp;</span>
            <span>&nbsp;</span>
        </div>

      </div>

      <ul class="nav">
        <li><a href="index.php" title="Go to the home page">Home</a></li>
        <li><a href="about.php" title="Go to the about page">About</a></li>
        <li><a href="services.php" title="Go to the services page">Services</a></li>
        <li><a href="contact.php" title="Go to the contact page">Contact</a></li>
      </ul>

    </nav>


</header>
