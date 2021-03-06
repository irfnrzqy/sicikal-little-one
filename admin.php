<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">Selamat Datang Admin | <b>Sicikal & Little One</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-book mr-2"></i>Kategori Buku</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-bookmark mr-2"></i>Daftar Buku</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-dollar-sign mr-2"></i>Daftar Harga</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</h3><hr>
        <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-book mr-2"></i>
              </div>
              <h5 class="card-title">Kategori Buku</h5>
              <div class="display-4">6</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
          <div class="card bg-success ml-4 mr-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
               <i class="fas fa-bookmark mr-2"></i>
              </div>
              <h5 class="card-title">Daftar Buku</h5>
              <div class="display-4">200</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
           <div class="row text-white">
          <div class="card bg-danger ml-4" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-dollar-sign mr-2"></i>
              </div>
              <h5 class="card-title">Daftar Harga</h5>
              <div class="display-4">18.000</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
            <div class="card-header bg-danger display-4 pt-4 pb-4">
              <i class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-danger">INSTAGRAM</h5>
              <a href="https://www.instagram.com/rakaanaaufal/" class="btn btn-danger">Follow</a>
            </div>
          </div>
          <div class="card ml-4  text-white text-center" style="width: 18rem;">
            <div class="card-header bg-info display-4 pt-4 pb-4">
              <i class="fab fa-facebook-f"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-info">FACEBOOK</h5>
              <a href="#" class="btn btn-info">Like</a>
            </div>
          </div>
          <div class="card ml-4  text-white text-center" style="width: 18rem;">
            <div class="card-header bg-primary display-4 pt-4 pb-4">
              <i class="fab fa-twitter"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-primary">TWITER</h5>
              <a href="#" class="btn btn-primary">Follow</a>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>