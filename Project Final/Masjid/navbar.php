<!doctype html>
<html lang="en">

<head>
  <link href="CSS/navbar.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
      <div class="col-lg-3">
        <a class="navbar-brand text" href="#">Ayo Sholat!</a>
      </div>
      <img class="img" src="asset/Masjid-white.png" width="130">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarCollapse">
        <div class="col-lg-8 d-flex justify-content-lg-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link me-3" href="index.php">BERANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="kegiatan.php">KEGIATAN</a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <div href="/" class="d-none d-lg-block d-print-block mx-3 px-3">
                <img class="" src="asset/Masjid-white.png" width="100">
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="galeri.php">GALERI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="contact.php">KONTAK</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 d-flex justify-content-lg-end ">
          <form class="d-flex" role="search">
            <button type="button" class="btn btn-light text-dark me-2 px-lg-4 py-1" style="font-weight: 500;">Login</button>
            <button type="button" class="btn px-lg-4 py-1 text-white" style="background-color: rgb(127, 177, 18); font-weight: 500;">Sign-up</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</body>

</html>