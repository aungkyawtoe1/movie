<?php
?>

<html>

<head>
  <title>MOVIE PHP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <!---Menu--->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #a3d1ff!important;">
    <a class="navbar-brand" href="./">MOVIE PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./">หนังเเรก<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ยอดฮิต</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            หมวดหมู่
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">พากย์ไทย</a>
            <a class="dropdown-item" href="#">พากย์อ้งกฤษ</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">การ์ตูน</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">ติดต่อเรา</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
      </form>
    </div>
  </nav>
  <!---Menu End--->

  <div class="album py-5 bg-light" style="background-color: #d1e1f5!important;">
    <div class="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">หนัาเเรก</a></li>
          <li class="breadcrumb-item active" aria-current="page">Doraemon</li>
        </ol>
      </nav>

      <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <img src="img/01.jpg" while="100%" height="380" class="card-img-top"/>
            </div>
            </div>
            <div class="col-md-9">
            <div class="card mb-4 shadow-sm">
            <iframe width="100%" height="380" src="https://www.youtube.com/embed/00gVB8IciAY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
      </div>

      <div class="row">
     
            <div class="col-md-12">
            <div class="card shadow-sm text-center" style="background-color: #e9a6bc!important;color: white;"><h3>Player</h3></div>
            <div class="card mb-4 shadow-sm">
            <iframe width="100%" height="623" src="https://www.youtube.com/embed/00gVB8IciAY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
      </div>
      
    </div>
  </div>

  <footer class="blog-footer text-center" style="padding: 15px;background-color: #2e627a;">
    <p style="margin:0; color:#fff;"> ดุหนัง ออนไลน์ฟรี ทีนี้เลย <a href="./" style="margin:0; color:#ff9e9e;">MOVIE PHP</a></p>
  </footer>
</body>

</html>