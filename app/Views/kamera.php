<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sewa Kamera </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="background-color: #ffe2e2;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #ffe2e2;">
        <div class="container-fluid">
            <a class="navbar-brand" style="padding-left: 20px;">
                <h3>
                    <span style="color: #922B21; font-family: Cooper Black;"> SEWA </span>
                    <span style="color: #C0392B; font-family: Cooper Black;"> KAMERA </span>
                </h3>
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('kamera') ?>" style="color: #cd4c4c;"> Home </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('add_data_kamera') ?>" style="color: #cd4c4c;"> Order </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('data') ?>" style="color: #cd4c4c;"> Data </a>
                </li>
                <li class="nav-item" style="padding-top: 4px; padding-bottom: 7px;">
                    <a class="nav-link" href="<?= base_url('detail') ?>" style="color: #cd4c4c;"> Details </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/k1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/k2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/k3.jpg" class="d-block w-100">
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
    </div><br><br>

    <!-- Pembukaan -->
    <div style="text-align: center;">
        <table bordercolor="#C0392B" width="90%" cellspacing="12px" style="margin-left:auto;margin-right:auto">
            <tr>
                <td style="background-color: #ffcccc; padding: 20px;">
                    <h3 style="text-align: center;"><b>
                            <span style="color: #C0392B; font-family: Bookman Old Style;"> SEWA </span>
                            <span style="color: #922B21; font-family: Bookman Old Style;"> KAMERA </span></b>
                    </h3>
                    <p style="text-align: center;">
                        Selamat datang di Sewa Kamera. Disini kami menyediakan berbagai kamera untuk disewakan.
                        Anda dapat memilih kamera manapun yang ingin anda sewa disini. Tentunya sewa kamera
                        disini diberikan Keamanan dan Kualitas terbaik. Sebelum menyewakan kepada anda, kami
                        telah memeriksa terlebih dahulu kamera yang akan digunakan agar tidak ada kerusakan
                        sedikitpun pada kamera yang akan disewa. Selain itu, kami juga menyediakan kamera-kamera keluaran terbaru.
                    </p>
                </td>
            </tr>
        </table>
    </div><br><br>

    <!-- Menu -->
    <h3 style="text-align: center;"><b>
            <span style="color: #922B21; font-family: Bookman Old Style;"> KAMERA </span>
            <span style="color: #C0392B; font-family: Bookman Old Style;"> PILIHAN </span></b>
    </h3>
    <div style="text-align: center;">
        <table bordercolor="#C0392B" cellpadding="20" width="90%" style="border:1; background-color:#ffcccc; margin-left:auto;margin-right:auto">
            <tr bordercolor="#C0392B">
                <td>
                    <img src="img/sa7.png" width="170" height="90"><br>
                    <span size="4" color="#e1e1e1"> Sony Alpha 7 Mark II </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp925.000,00/Hari</span>
                </td>
                <td>
                    <img src="img/se10.png" width="150" height="90"><br>
                    <span size="4" color="#e1e1e1"> Sony ZV-E10 </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp670.000,00/Hari </span>

                </td>
                <td>
                    <img src="img/ls1.png" width="150" height="90"><br>
                    <span size="4" color="#e1e1e1"> Panasonic Lumix DC-S1 </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp1.110.000,00/Hari </span>
                </td>
                <td>
                    <img src="img/cs5.png" width="150" height="90"><br>
                    <span size="4" color="#e1e1e1"> Canon EOS R5 </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp3.750.000,00/Hari </span>
                </td>
            </tr>
            <tr style="border-color: #C0392B;">
                <td>
                    <img src="img/ft30.png" width="150" height="90"><br>
                    <span size="4" color="#e1e1e1"> Fujifilm X-T30 II </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp825.000,00/Hari</span>
                </td>
                <td>
                    <img src="img/nzfc.png" width="150" height="90"><br>
                    <span size="4" color="#e1e1e1"> Nikon Zfc 16-50mm </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp770.000,00/Hari </span>

                </td>
                <td>
                    <img src="img/sa6.png" width="130" height="90"><br>
                    <span size="4" color="#e1e1e1"> Sony Alpha A6400 </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp225.000,00/Hari </span>
                </td>
                <td>
                    <img src="img/ldc.png" width="140" height="90"><br>
                    <span size="4" color="#e1e1e1"> Panasonic Lumix DC-GH5 </span><br>
                    <span size="4.5" color="#e1e1e1"> Rp950.000,00/Hari </span>
                </td>
            </tr>
        </table>
    </div><br><br>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-dark" style="background-color: #ffcccc">
        <!-- Section: Links  -->
        <section class="d-flex">
            <div class="container text-center text-md-start">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold" style="text-align: center;">About Me</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 260px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: center;">
                            Nama : Puspa Khairunnisa <br><br>
                            Kelas : 5MID <br><br>
                            NIM : 062040832741
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="text-align: center;"> Menu </h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 170px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: center;">
                            <a style="text-decoration:none" href="<?= base_url('kamera') ?>" class="text-dark"><b> Home </b></a>
                        </p>
                        <p style="text-align: center;">
                            <a style="text-decoration:none" href="<?= base_url('order') ?>" class="text-dark"><b> Order </b></a>
                        </p>
                        <p style="text-align: center;">
                            <a style="text-decoration:none" href="<?= base_url('data') ?>" class="text-dark"><b> Data </b></a>
                        </p>
                        <p style="text-align: center;">
                            <a style="text-decoration:none" href="<?= base_url('detail') ?>" class="text-dark"><b> Details </b></a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold" style="text-align: center;">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 260px; background-color: #7c4dff; height: 2px" />
                        <p style="text-align: center;"><a style="text-decoration:none " href="https://wa.me/6289681607363" target="_blank"> +62 896-8160-7363 (Puspa)</a></p>
                        <p style="text-align: center;"><a style="text-decoration:none" href="https://www.instagram.com/pspakh_/" target="_blank"> pspakh_ </a></p>
                        <p style="text-align: center;"><a style="text-decoration:none" href="mailto:puspakhairunnisa2003@gmail.com"> puspakhairunnisa2003@gmail.com </a></p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/"> Puspa Khairunnisa </a>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>