<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Dashboard</title>
  </head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">neozone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="nav navbar-expand-lg justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color:black;" onclick="return confirm('Yakin keluar?');" href="logout.php" >Logout</a>
            </li>
        </ul>
    </nav>
    
<!-- end navbar -->
    <br><br>
<!-- jumbotron -->
    <div class="container mt-2">
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4 center">NEOZONE</h1>
                <p class="lead center">To The World and Everybody Looking For Us</p>
                <hr>
            </div>
        </div>
    </div>
<!-- end jumbotron -->

<div class="container mt-5" align="center">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 w-50">
            <img src="foto/prince.jpg" class="card-img-top" style="width:100%;" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="prince.php" style="text-decoration:none; color:black;"> Princes </a></h5>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 w-50">
            <img src="foto/princess.jpg" class="card-img-top" style="width:100%;" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href="princess.php" style="text-decoration:none; color:black;"> Princesses </a></h5>
            </div>
            </div>
        </div>
    </div>
</div>


<footer class="text-center ">
    <div class="text-center p-3 mt-5" style="background-color: rgba(0, 0, 0, 0.05);">
        <strong class="mt-10">Copyright &copy; 2021 <a href="https://github.com/PujaMaulidaHerwanto">Puja Maulida Herwanto</a>.</strong> All rights reserved.
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

  </body>
</html>