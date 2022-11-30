<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Fixed top navbar example · Bootstrap v5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">

    <!-- Custom styles for this template -->
    <link href="CSS/kegiatan.css" rel="stylesheet">
</head>


<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark border" style="background-color: rgb(30, 105, 92);" aria-label="Main navigation">
    <div class="container-fluid my-2">
        <div class="col-lg-3">
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-lg-6">
            <div class="navbar-collapse offcanvas-collapse d-flex justify-content-lg-center align-items-start" id="navbarsExampleDefault">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="index.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="kegiatan.php">KEGIATAN</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="/" class="d-none d-lg-block d-print-block px-3">
                            <img class="" src="asset/Masjid-white.png" width="130">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="galeri.php">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="contact.php">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="col-lg-auto mb-2 mb-lg-0 me-lg-auto text-end">
                <button type="button" class="btn btn-light text-dark me-2 px-lg-4 py-1" style="font-weight: 500;">Login</button>
                <button type="button" class="btn px-lg-4 py-1 text-white" style="background-color: rgb(127, 177, 18); font-weight: 500;">Sign-up</button>
            </div>
        </div>

    </div>
</nav> -->
<?php include "navbar.php"; ?>
<!-- End Navbar -->

<!-- Konten -->

<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3 text-bg-dark">
                <img src="asset/khatib_jumat.jpg" class="card-img d-block" alt="..." style="width: 800;">
                <div class="card-img-overlay px-4 pb-4 d-flex flex-column justify-content-end" style="background-image: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0));">
                    <h5 class="card-title" style="font-weight: bold;">KHATIB JUMAT</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <hr>
            <div class="row-lg d-flex flex-wrap justify-content-center my-3">
                <img src="asset/jumat.jpg" alt="" style="width: 300px; height: 170px; border-radius: 5px;">
                <div class="col-lg text-lg-start text-center ms-4">
                    <h4 class="mb-0" style="font-size: 25px; font-weight: bold;">KEGIATAN JUMAT</h4>
                    <P class="mb-0 mt-2" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                    <button type="button" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                </div>
            </div>
            <div class="row-lg d-flex flex-wrap justify-content-center my-3">
                <img src="asset/pengajian.jpeg" alt="" style="width: 300px; height: 170px; border-radius: 5px;">
                <div class="col-lg text-lg-start text-center ms-4">
                    <h4 class="mb-0" style="font-size: 25px; font-weight: bold;">KEGIATAN PENGAJIAN</h4>
                    <P class="mb-0 mt-2" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                    <button type="button" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                </div>
            </div>
            <div class="row-lg d-flex flex-wrap justify-content-center my-3">
                <img src="asset/ramadhan.jpg" alt="" style="width: 300px; height: 170px; border-radius: 5px;">
                <div class="col-lg text-lg-start text-center ms-4">
                    <h4 class="mb-0" style="font-size: 25px; font-weight: bold;">KEGIATAN HARI BESAR ISLAM</h4>
                    <P class="mb-0 mt-2" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                    <button type="button" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                </div>
            </div>
            <div class="row-lg d-flex flex-wrap justify-content-center my-3">
                <img src="asset/yasin.jpg" alt="" style="width: 300px; height: 170px; border-radius: 5px;">
                <div class="col-lg text-lg-start text-center ms-4">
                    <h4 class="mb-0" style="font-size: 25px; font-weight: bold;">KEGIATAN YASINAN ASRAMA</h4>
                    <P class="mb-0 mt-2" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                    <button type="button" class="btn btn-success mb-4 p-0 px-2 pb-1 mt-2" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card text-center">
                <div class="card-header" style="background-color: rgb(30, 105, 92);">
                    <span style="color: white; font-weight: 500;">DAFTAR KEGIATAN</span>
                </div>
                <div class="card-body d-flex flex-column align-items-start">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">JUMAT</th>
                            </tr>
                            <tr>
                                <th scope="col">PENGAJIAN</th>
                            </tr>
                            <tr>
                                <th scope="col">RAMADHAN</th>
                            </tr>
                            <tr>
                                <th scope="col">YASINAN</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Konten -->

</html>