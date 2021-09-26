<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>restaurant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" class="">
  <link rel="stylesheet" href="base.css" class="">
  <link rel="stylesheet" href="grid.css" class="">
  <link rel="stylesheet" href="responsive.css" class="">
</head>

<body>
  <div class="main">
    <div class="gird wide">
      <nav class="navbar navbar-expand-lg navbar-light bg-light edit-navbar edit-navbar">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="" class="navbar-logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse edit-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link edit-nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Foods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link edit-nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide edit-slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/bg.jpg" class="d-block w-100 edit-block" alt="...">
        </div>
      </div>
      <nav class="edit-search navbar navbar-light bg-light">
        <div class="container-fluid ">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>