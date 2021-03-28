<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Dedi Rosandi</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- plugins -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link href="plugins/fontawesome/css/all.css" rel="stylesheet">
  <!-- Main Stylesheet -->
  <link href="plugins/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class=navbar-brand href="index.html"><img class="img-fluid" src="images/logo.png" alt="godocs"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="fas fa-align-right h4 text-dark"></i></button>
      <div class="collapse navbar-collapse text-center" id=navigation>
        <ul class="navbar-nav mx-auto align-items-center">
          <!-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="search.html">Search Page</a></li> -->
        </ul>
        <a href="login/" class="btn btn-sm btn-primary ml-lg-4">Login</a>
      </div>
    </nav>
  </div>
</header>

<!-- banner -->
<section class="section pb-0">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 text-center text-lg-left">
        <h1 class="mb-4"> <img src="images/code.png" width="100px" alt="illustration" class="img-fluid"></h1>
        <p class="mb-4">Lorem ipsum dolor amet, consetetur sadiffspscing elitr, diam nonumy invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua At.</p>
        <form class="search-wrapper" action="search.html">
          <input id="search-by" name="s" type="search" class="form-control form-control-lg"
            placeholder="Search Here...">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
      <div class="col-lg-4 d-lg-block d-none">
        <img src="images/source-code-ilustration-by-undraw.svg" alt="illustration" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<!-- /banner -->

<!-- artikel -->
<?php require_once 'pages/artikel.php'; ?>
<!-- /artikel -->

<!-- Paginayion -->

<!-- /Paginatio -->



<!-- call to action -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 text-center d-lg-block d-none">
        <img src="images/Envelope-by-undraw.svg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 text-lg-left text-center">
        <h2 class="mb-3">Ada pertayaan?</h2>
        <p>Silakan kirim pertanyaan dibawah. </p>
        <a href="contact.html" class="btn btn-primary">Kirim Pertanyaan</a>
      </div>
    </div>
  </div>
</section>
<!-- /call to action -->

<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
      <div class="col-lg-4">
        <!-- <ul class="list-inline footer-menu text-center text-lg-left">
          <li class="list-inline-item"><a href="changelog.html">Changelog</a></li>
          <li class="list-inline-item"><a href="contact.html">contact</a></li>
          <li class="list-inline-item"><a href="search.html">Search</a></li>
        </ul> -->
      </div>
      <div class="col-lg-4 text-center mb-4 mb-lg-0">
        <a class="navbar-brand" href="index.html">
          <img class="img-fluid" src="images/logo.png" alt="Hugo documentation theme">
        </a>
      </div>
      <div class="col-lg-4">
        <ul class="list-inline social-icons text-lg-right text-center">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram-square"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-github-square"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2020 a hugo theme by <a href="https://themefisher.com">themefisher</a></small>
    </div>
  </div>
</footer>

<!-- plugins -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/masonry/masonry.min.js"></script>
<script src="plugins/clipboard/clipboard.min.js"></script>
<script src="plugins/match-height/jquery.matchHeight-min.js"></script>

<!-- Main Script -->
<script src="plugins/js/script.js"></script>

</body>
</html>