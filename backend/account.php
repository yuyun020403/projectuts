<?php
// Create database connection using config file
include_once("../database/koneksi.php");
$no = 1;
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data produk</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #212A3E;">
        <div class="m-1">
            <img src="../frontend/picture/icon.png"  alt="" style="border-radius: 100%;" width="40" height="40">
        </div>
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-2" href="index.html">Book Store</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">


            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../frontend/404.html">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="../frontend/login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </li>
                        <a class="nav-link py-1">
                            <div>
                                <img src="../frontend/picture/matthew.jpg" alt="" style="border-radius: 100%;" width="40" height="40">
                            </div>
                            &nbsp;
                            <h6>Matthew</h6>
                        </a>
                        <div class="text-center py-3">
                            <a class="nav-link" href="../frontend/index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="../backend/account.php">
                            <div class="sb-nav-link-icon"><i  class="fa-solid fa-user"></i></i></div>
                                Account
                            </a>
                            <a class="nav-link" href="user.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></i></div>
                                Produk
                            </a>
                        </div>
                    
            </nav>
        </div>
        <div id="layoutSidenav_content" style="background-color: #9BA4B5;">
            <main >
            <div class="row align-items-md-stretch py-5 m-4">
            <div class="col-md-3">
                <img style="border-radius: 100%;" src="../frontend/picture/matthew.jpg" alt="" width="150" height="150">
            </div>
            <div class="col-md-6">
                <h2>Theodor Matthew</h2>
                <h5>@Matthew </h5>
                <p><i>I am art, and art is beauty</i></p>
                <div class="row align-items-md-stretch " >
                    <div class="col-md-3">
                        <p style="color:#394867; ">Social Media :</p>
                    </div>
                    <div class="col-md-6">
                    <p ><a style="text-decoration: none; color: #537188;" href="https://www.instagram.com/theodrematthew/"><i class="fa-brands fa-instagram" style="color: #022664;"></i> Instagram</a></p>
                    <p ><a style="color: #537188; text-decoration: none; " href="https://www.tiktok.com/@bapaknyakohiii?ug_source=op.auth&ug_term=Linktr.ee&utm_source=awyc6vc625ejxp86&utm_campaign=tt4d_profile_link&_r=1"><i class="fa-brands fa-tiktok" style="color: #002970;"></i> Tiktok</a></p>
                    <p ><a style="text-decoration: none; color: #537188;" href="https://open.spotify.com/user/31zqs3d5eiyjtbspfozlahekb5wu?si=2ZB60lRTSvef_o9T3A4zGQ&nd=1"><i class="fa-brands fa-spotify" style="color: #022664;"></i>Spotify</a></p>
                    </div>
                </div>
            </div>
        </div>
            </main>
            <footer class="py-4  mt-auto" style="background-color: #F1F6F9;">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; YunsBookstore2023</div>
                        <div>
                            <a href="#">call 911</a>
                            &middot;
                            <a href="#">gamood &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>