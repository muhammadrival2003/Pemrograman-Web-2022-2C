<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<!-- Header -->
<?php include "header.php"; ?>
<!-- Header End -->

<!-- konten -->

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="asset/Capture.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="asset/Capture.PNG" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="asset/Capture.PNG" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- info panel -->
<div class="container d-none d-lg-block d-print-block mb-3" style="margin-top: -70px; z-index: 1; position: relative;">
    <div class="row justify-content-center">
        <div class="col-10" style="box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3); border-top: 5px solid rgb(127, 177, 18); border-radius: 5px;">
            <div class="row" style="background-color: white;">
                <div class="col-lg d-flex my-3">
                    <img src="asset/teacher.png" alt="" style="width: 70px; height: 70px;">
                    <div class="col ms-4">
                        <h4 class="mb-0" style="font-size: 16px; font-weight: bold;">PENGURUS</h4>
                        <P class="mb-0" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                        <button type="button" class="btn btn-success p-0 px-2 pb-1" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                    </div>
                </div>
                <div class="col-lg d-flex my-3">
                    <img src="asset/lokasi.png" alt="" style="width: 70px; height: 70px;">
                    <div class="col ms-4">
                        <h4 class="mb-0" style="font-size: 16px; font-weight: bold;">LOCATION</h4>
                        <P class="mb-0" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                        <button type="button" class="btn btn-success p-0 px-2 pb-1" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                    </div>
                </div>
                <div class="col-lg d-flex my-3">
                    <img src="asset/laporan_keuangan.png" alt="" style="width: 70px; height: 70px;">
                    <div class="col ms-4">
                        <h4 class="mb-0" style="font-size: 16px; font-weight: bold;">LAPORAN KEUANGAN</h4>
                        <P class="mb-0" style="font-size: 11px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut, cupiditate.</P>
                        <button type="button" class="btn btn-success p-0 px-2 pb-1" style="border-radius: 2px; font-size: 12px;">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- info panel end -->

<!-- konten End -->


</html>