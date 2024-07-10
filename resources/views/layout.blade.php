<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Kuliner Nusantara</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fff;
    }

    .title {
        color: black;
        padding: 15px;
        font-size: 24px;
        text-align: left;
        text-decoration: none;
        display: block;
        font-weight: bold;
    }
    .title:hover {
        color: black;
        text-decoration: none; 
    }

    .sidebar {
      height: 100vh;
      background-color: #fdd835; /* Warna kuning */
      padding-top: 20px;
      position: fixed;
      
    }
    .sidebar-item {
      color: black;
      padding: 15px;
      text-align: left;
      text-decoration: none;
      display: block;
      font-weight: bold;
    }
    .sidebar-item:hover {
        text-decoration: none;
      background-color: #ffeb3b; /* Warna kuning terang saat hover */
      color: black;
    }
    .content {
      margin-left: 200px;
      padding: 20px;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


  <!-- Footer -->
  <footer class="bg-dark text-white mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-md-6">
          <h5 class="text-uppercase">Footer Content</h5>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-md-3">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!" class="text-white">Link 1</a></li>
            <li><a href="#!" class="text-white">Link 2</a></li>
            <li><a href="#!" class="text-white">Link 3</a></li>
            <li><a href="#!" class="text-white">Link 4</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!" class="text-white">Link 1</a></li>
            <li><a href="#!" class="text-white">Link 2</a></li>
            <li><a href="#!" class="text-white">Link 3</a></li>
            <li><a href="#!" class="text-white">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Your Website:
      <a class="text-white" href="https://yourwebsite.com/">yourwebsite.com</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
