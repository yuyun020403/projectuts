<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #212A3E;">
        <div class="m-1">
            <img src="../frontend/picture/icon.png" alt="" style="border-radius: 100%;" width="40" height="40">
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
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
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
                        <a class="nav-link py-1" href="tables.html">
                            <div>
                                <img src="../frontend/picture/ini yuyun.jpg" alt="" style="border-radius: 100%;" width="40" height="40">
                            </div>
                            &nbsp;
                            <h6>Yuyun Trisma</h6>
                        </a>
                        <div class="text-center py-3">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></i></div>
                                Pesanan
                            </a>
                        </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <form action="add.php" method="post" name="form1">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produk</h1>
                        <div class="py-3">
                            <?php

                            // Check If form submitted, insert form data into users table.
                            if (isset($_POST['Submit'])) {
                                $nama_pemesan = $_POST['nama_pemesan'];
                                $jk = $_POST['jk'];
                                $alamat_pemesan = $_POST['alamat_pemesan'];
                                $notelp = $_POST['notelp'];
                                $email = $_POST['email'];
                                $tgl_pesan = $_POST['tgl_pesan'];
                                $jmlh_pesan = $_POST['jmlh_pesan'];
                                $pesan = $_POST['pesan'];

                                // include database connection file
                                include_once("../database/koneksi.php");

                                // Insert user data into table
                                $result = mysqli_query($mysqli, "INSERT INTO pemesanan(nama_pemesan,jk,alamat_pemesan,notelp,email,tgl_pesan,jmlh_pesan,pesan) VALUES('$nama_pemesan','$jk','$alamat_pemesan','$notelp','$email','$tgl_pesan','$jmlh_pesan','$pesan')");
                            }
                            ?>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nama_pemesan" required>
                                    <label for="nama_pemesan">Nama</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="jk">Jenis Kelamin</label>
                                <br>
                                <label>Laki-Laki</label>
                                <input type="radio" name="jk" value="L" checked>
                                <br>
                                <label>Perempuan</label>
                                <input type="radio" name="jk" value="P"><br><br>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="alamat_pemesan" required>
                                    <label for="alamat_pemesan">Alamat</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="notelp" required>
                                    <label for="notelp">No.Telpon</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="tgl_pesan" required>
                                    <label for="tgl_pesan">Tanggal Pemesanan</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="jmlh_pesan" required>
                                    <label for="jmlh_pesan">Jumlah Pemesanan</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="pesan" required>
                                    <label for="pesan">Tinggalkan Pesan</label>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center">
                                <button class="btn btn-dark w-100 py-3" value="add" type="Submit" name="Submit">Submit Now</button>
                            </div>
                        </div>
                </form>
            </main>
            &nbsp; &nbsp;
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>