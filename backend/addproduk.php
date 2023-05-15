
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Produk</title>
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
                            <a class="nav-link" href="produk.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></i></div>
                                Produk
                            </a>
                        </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
            <form action="addproduk.php" method="post" name="form1">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Produk</h1>
                    <div class="py-3">
                        <?php

                        // Check If form submitted, insert form data into users table.
                        if (isset($_POST['Submit'])) {
                            $nama_produk = $_POST['nama_produk'];
                            $kode = $_POST['kode'];
                            $etalase = $_POST['etalase'];
                            $harga = $_POST['harga'];
                            $deskripsi = $_POST['deskripsi'];
                            $quantity = $_POST['quantity'];

                            // include database connection file
                            include_once("../database/koneksi.php");

                            // Insert user data into table
                            $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,kode,etalase,harga,deskripsi,quantity) VALUES('$nama_produk','$kode','$etalase','$harga','$deskripsi','$quantity')");
                        }
                        ?>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama_produk" required>
                                <label for="nama_produk">Nama Produk</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="kode" required>
                                <label for="kode">Kode Produk</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="etalase" required>
                                <label for="etalase">Etalase</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="harga" required>
                                <label for="harga">Harga</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="deskripsi" required>
                                <label for="deskripsi">Deskripsi</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="quantity" required>
                                <label for="quantity">Quantity</label>
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