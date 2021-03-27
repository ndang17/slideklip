<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Slideklip</title>
  </head>
  <body>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
  body {

      background-color: #ffffff!important;
      
      font-family: 'Open Sans', sans-serif;
  }
  .bg-light {
    background-color: #ffffff!important;
}
.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link {
    color: #ff5722;
}
  .navbar-light .navbar-nav .nav-link{
      color: #00bcd4;
  }
  </style>
    
    <div class="container">



    </div>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SlideKlip</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Templates</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Backgrounds</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Diagrams</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Charts / Tables</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
    
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f5f5f5"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">First slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f5f5f5"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">Second slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f5f5f5"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">Third slide</text></svg>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

    </div>


<div class="container py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Custom cards</h2>

  <div class="row row-cols-4 align-items-stretch py-5">
    <div class="col">

      <div class="card card-cover h-10 overflow-hidden text-secondary bg-light rounded-5 shadow-sm" style="background-image: url('unsplash-photo-1.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-secondary text-shadow-1">
          <h4 class="pt-0 mt-0 mb-1 lh-1 fw-bold">Free Presentation Templates</h4>
          <ul class="d-flex list-unstyled mt-auto">
            
            <li class="d-flex">
              <small>Sign Up and Get 12 FREE Template</small>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <div class="col">
      
      <div class="card card-cover h-100 overflow-hidden text-dark bg-light rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-secondary text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Free</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>Pakistan</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>4d</small>
            </li>
          </ul>
        </div>
      </div>
      
    </div>

    

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Free</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>Pakistan</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>4d</small>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Free</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>California</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>5d</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>