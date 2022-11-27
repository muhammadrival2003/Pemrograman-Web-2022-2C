<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="header.css" rel="stylesheet">
</head>

<!-- Header pertama -->
<nav class="">
    <div class="container pb-3">
        <!-- <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"> -->
        <div class="row pt-3">
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-start">
                <img class="responsive" src="asset/Masjid.png" alt="Chania" width="100">
            </div>
            <div class="col-12 col-lg-6">
                <!-- <div class="d-flex flex-wrap align-items-center my-lg-0 justify-content-center justify-content-lg-end"> -->
                <div class="container my-0 mt-2">
                    <div class="row text-center my-0" style="color: black">
                        <h6 class="d-none d-lg-block d-print-block">Waktu Shalat | <span style="color: rgb(127, 177, 18);">Kamis, 17-11-2022</span></h6>
                    </div>

                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid justify-content-center">
                            <div class="row mb-3">
                                <button class="navbar-toggler pb-0" style="background-color: rgb(30, 105, 92);" type="button" data-bs-toggle="collapse" data-bs-target="#JadwalSholat" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                    <h6 style="font-size: 15px; color: white; font-weight: 500;">Waktu Shalat | <span style="color: rgb(127, 177, 18);">Kamis, 17-11-2022</span></h6>
                                </button>
                            </div>
                            <div class="row">
                                <div class="collapse navbar-collapse" id="JadwalSholat">
                                    <ul class="nav col-lg-auto my-2 justify-content-center my-md-0">
                                        <li class="px-4 mx-1 mb-lg-0 mb-3 text-center rounded-1 shadow-sm border border-1" style="font-size: 12px; font-weight: 500; border-color: rgba(0,0,0,0.7);">
                                            <p class="mb-1"><i class="bi bi-clock"></i> Subuh</p>
                                            <dt class="mb-1">5 : 30</dt>
                                        </li>
                                        <li class="px-4 mx-2 mb-lg-0 mb-3 text-center rounded-1 shadow-sm border border-1" style="font-size: 12px; font-weight: 500; border-color: rgba(0,0,0,0.7);">
                                            <dd class="mb-1"><i class="bi bi-clock"></i> Dzuhur</dd>
                                            <dt class="mb-1">12 : 20</dt>
                                        </li>
                                        <li class="px-4 mx-2 mb-lg-0 mb-3 text-center rounded-1 shadow-sm border border-1" style="font-size: 12px; font-weight: 500; border-color: rgba(0,0,0,0.7);">
                                            <dd class="mb-1"><i class="bi bi-clock"></i> Ashar</dd>
                                            <dt class="mb-1">16 : 45</dt>
                                        </li>
                                        <li class="px-4 mx-2 mb-lg-0 mb-3 text-center rounded-1 shadow-sm border border-1" style="font-size: 12px; font-weight: 500; border-color: rgba(0,0,0,0.7);">
                                            <dd class="mb-1"><i class="bi bi-clock"></i> Magrib</dd>
                                            <dt class="mb-1">18 : 20</dt>
                                        </li>
                                        <li class="px-4 mx-2 mb-lg-0 mb-3 text-center rounded-1 shadow-sm border border-1" style="font-size: 12px; font-weight: 500; border-color: rgba(0,0,0,0.7);">
                                            <dd class="mb-1"><i class="bi bi-clock"></i> Isya</dd>
                                            <dt class="mb-1">19 : 30</dt>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- </div> -->
    </div>
</nav>
<!-- Header pertama End -->

<!-- Header kedua -->
<nav class="navbar navbar-expand-lg" style="background-color: rgb(30, 105, 92);">
    <div class="container-fluid">
        <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="index.php">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="kegiatan.php">KEGIATAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="galeri.php">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-3" style="color: rgb(191, 220, 176); font-weight: 600;" href="contact.php">KONTAK</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-auto mb-2 mb-lg-0 me-lg-auto text-end">
            <button type="button" class="btn btn-light text-dark me-2 px-lg-4 py-1" style="font-weight: 500;">Login</button>
            <button type="button" class="btn px-lg-4 py-1 text-white" style="background-color: rgb(127, 177, 18); font-weight: 500;">Sign-up</button>
        </div>
    </div>
</nav>
<!-- Header kedua End -->