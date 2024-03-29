<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Recycle Store</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|PT+Sans|Playfair+Display|Tangerine&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="./css/Home/index.css" />
  <link rel="stylesheet" href="./css/External/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Fira+Sans+Condensed|Merriweather|Varela+Round|Yanone+Kaffeesatz&display=swap" rel="stylesheet" />
</head>

<body>
  <section id="nav-bar" style="position: sticky;top:0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <a class="navbar-brand" href="index.php"><img src="./image/logo.png" alt="logo" style="height: 40px" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./signup.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-light border-0 p-1 text-success" href="./contact.php">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <div style="background-color: rgba(0,0,0,0.5)">
    <div class="container-fluid land" style="height:94vh">
      <div class="row justify-content-center">
        <div class="col-10">
          <p class="text-white text-center  text-capitalize text-justify font-play text-transparent" style="padding-top:25%;font-size: 250%;">
            When you put the whole picture together, recycling is the right
            thing to do.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- font-family: 'Varela Round', sans-serif; -->
  <div class="container mt-5">
    <div class="mb-5">
      <p class="text-center h1 text-info">Features</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 col-md-4 mb-5">
        <p class="text-center text-success mb-3">
          <i class="fas fa-leaf fa-3x"></i>
        </p>
        <p class="mb-3 text-justify">
          Contrary to popular belief, Lorem Ipsum is not simply random text.
          It has roots in a piece of classical Latin literature from 45 BC,
          making it over 2000 years old.
        </p>
      </div>
      <div class="col-10 col-md-4 mb-5">
        <p class="text-center text-warning mb-3">
          <i class="fab fa-bitcoin fa-3x"></i>
        </p>
        <p class="mb-3 text-justify">
          Contrary to popular belief, Lorem Ipsum is not simply random text.
          It has roots in a piece of classical Latin literature from 45 BC,
          making it over 2000 years old.
        </p>
      </div>
      <div class="col-10 col-md-4 mb-5">
        <p class="text-center text-secondary mb-3">
          <i class="fas fa-trash fa-3x"></i>
        </p>
        <p class="mb-3 text-justify">
          Contrary to popular belief, Lorem Ipsum is not simply random text.
          It has roots in a piece of classical Latin literature from 45 BC,
          making it over 2000 years old.
        </p>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="mb-5">
      <p class="text-center text-secondary font-dance" style="font-size: 50px">
        Videos
      </p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-12 mb-5 ">
        <div class="p-2">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/OasbYWF4_S8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 col-12 mb-5">
        <div class="p-2">
          <p class="text-justify h5">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here,
            content here', making it look like readable English. Many desktop
            publishing packages and web page editors now use Lorem Ipsum as
            their default model text, and a search for 'lorem ipsum' will
            uncover many web sites still in their infancy.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-12 mb-5 d-none d-sm-none d-md-block">
        <div class="p-2">
          <p class="text-justify h5">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here,
            content here', making it look like readable English. Many desktop
            publishing packages and web page editors now use Lorem Ipsum as
            their default model text, and a search for 'lorem ipsum' will
            uncover many web sites still in their infancy.
          </p>
        </div>
      </div>
      <div class="col-md-6 col-12 mb-5">
        <div class="p-2">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/HkHEJEzMKwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6 col-12 mb-5 d-md-none">
        <div class="p-2">
          <p class="text-justify h5">
            It is a long established fact that a reader will be distracted by
            the readable content of a page when looking at its layout. The
            point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here,
            content here', making it look like readable English. Many desktop
            publishing packages and web page editors now use Lorem Ipsum as
            their default model text, and a search for 'lorem ipsum' will
            uncover many web sites still in their infancy.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <p class="h1 text-center mb-5 text-secondary font-play">
      Recycled Product
    </p>
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-5 col-12 mb-5" style="height:275px">
        <img src="./image/shopping-bag-931293_1920.jpg" style="width:100%;height: 100%;" class="img-fluid image-hover" alt="Shopping Bag" />
      </div>
      <div class="col-lg-3 col-md-5 col-12 mb-5" style="height:275px">
        <img src="./image/trash-1428113_1920.jpg" style="width:100%;height: 100%;" class="img-fluid image-hover" alt="Trash" />
      </div>
      <div class="col-lg-3 col-md-5 col-12 mb-5" style="height:275px">
        <img src="./image/recycle1.jpg" style="width:100%;height: 100%;" class="img-fluid image-hover" alt="Cup" />
      </div>
      <div class="col-lg-3 col-md-5 col-12 mb-5" style="height:275px">
        <img src="./image/recycle2.jpg" style="width:100%;height: 100%;" class="img-fluid image-hover" alt="Phone Holder" />
      </div>
    </div>
  </div>
  <div class="container-fluid mt-5 bg-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 col-10 mb-5 mt-5 text-white">
          <p>
            <i class="fas fa-map-marker-alt"></i><span class="pl-3">Kjsce Vidyavihar, Mumbai</span>
          </p>
          <p>
            <i class="fas fa-phone"></i><span class="pl-3">22551155</span>
          </p>
          <p>
            <i class="fas fa-envelope"></i><span class="pl-3 text-primary">support@company.com</span>
          </p>
        </div>
        <div class="col-md-4 col-10 mb-5 mt-5 text-white">
          <div>
            <h3 class="font-play">About the Company</h3>
            <p class="text-justify text-secondary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
          <a href="https://facebook.com" target="blank" class="text-secondary"><i class="fab fa-facebook-square fa-lg"></i></a>
          <a href="https://twitter.com" target="blank" class="text-secondary pl-1"><i class="fab fa-twitter-square fa-lg"></i></a>
          <a href="https://linkedin.com" target="blank" class="text-secondary pl-1"><i class="fab fa-linkedin fa-lg"></i></a>
          <a href="https://github.com" target="blank" class="text-secondary pl-1"><i class="fab fa-github-square fa-lg"></i></a>
        </div>
      </div>
      <div class="row justify-content-start">
        <div class="col-md-8 col-12">
          <p class="text-secondary">
            Copyright <span class="text-success">RecycleStore</span> 2019. All
            Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
