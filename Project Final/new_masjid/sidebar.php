<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/CSS/sidebar.css">
</head>

<div class="col-lg-2 ">

    <nav class="navbar navbar-expand-lg bg-white ">
        <div class="container-fluid">
            <!-- Tombol offcanvas sidebar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Tombol offcanvas sidebar End -->

            <!-- Tombol offcanvas rightbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Tombol offcanvas rightbar End -->
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body-lg d-flex flex-column justify-content-between ">
                    <div class="d-flex flex-column flex-shrink-0 ">
                        <div class="row text-center mt-5">
                            <h4 class="text-albayaan">AL-BAYAAN</h4>
                        </div>
                        <ul class="nav nav-pills flex-column mb-auto ">
                            <li class="nav-item">
                                <a href="beranda" class="nav-link " aria-current="page">
                                    <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'beranda') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-house-door-fill me-3"></i>Beranda</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="kegiatan" class="nav-link " aria-current="page">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body">
                                                <h6 class="text-sidebar <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kegiatan') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-activity me-3"></i>Kegiatan</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-sidebar  <?php echo ((isset($_GET['x']) && $_GET['x'] == 'kegiatan') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-activity me-3"></i>Kegiatan</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="galeri" class="nav-link " aria-current="page">
                                    <h6 class="text-sidebar  <?php echo ((isset($_GET['x']) && $_GET['x'] == 'galeri') || !isset($_GET['x'])) ? 'active' : 'none'; ?>"><i class="bi bi-images me-3"></i>Galeri</h6>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link " aria-current="page">
                                    <h6 class="text-sidebar"><i class="bi bi-person-lines-fill me-3"></i>Kontak</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn tombol-kep"><i class="bi bi-people-fill me-2"></i>Kepengurusan</button>
                </div>
            </div>
        </div>
    </nav>
</div>

</html>