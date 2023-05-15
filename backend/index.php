<?php
// Create database connection using config file
include_once("../database/koneksi.php");
$no = 1;
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pemesanan ORDER BY id DESC");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Font Awesome Icons -->

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #212A3E;">
        <div class="m-1">
            <img src="../frontend/picture/icon.png" alt=""  width="40" height="40">
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
                        <a class="nav-link py-1" href="admin.php">
                            <div>
                                <img src="../frontend/picture/ini yuyun.jpg" alt="" style="border-radius: 100%;" width="40" height="40">
                            </div>
                            &nbsp;
                            <h6>Yuyun Trisma</h6>
                        </a>
                        <div class="text-center py-3">
                            <a class="nav-link" href="../frontend/index.html">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="../backend/admin.php">
                            <div class="sb-nav-link-icon"><i  class="fa-solid fa-user"></i></i></div>
                                Account
                            </a>
                        <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pen-to-square"></i></i></div>
                                Pesanan
                            </a>
                            <a class="nav-link" href="produk.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tags"></i></i></div>
                                Produk
                            </a>
                        </div>
                    
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid ">
                    <h1 class="mt-4">Data Pesanan</h1>
                    <ol class="breadcrumb mb-4">
                        <button type="button" class="btn btn-outline-dark"><a href="add.php" style="text-decoration: none; color:sienna;">Tambah Pelanggan</a></button>
                    </ol>
                    <div>
                        <table class="table  table-striped" style="background-color: #E4DCCF;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Alamat</th>
                                    <th>Telpon</th>
                                    <th>Email</th>
                                    <th>Tgl Pemesanan</th>
                                    <th>Jumlah</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <?php
                            while ($user_data = mysqli_fetch_array($result)) {
                            ?>
                                <tr><?php echo '<tr>' ?></tr>
                                <th><?php echo $no++ ?></th>
                                <td><?php echo $user_data['nama_pemesan'] ?></td>
                                <td><?php echo $user_data['jk'] ?></td>
                                <td><?php echo $user_data['alamat_pemesan'] ?></td>
                                <td><?php echo $user_data['notelp'] ?></td>
                                <td><?php echo $user_data['email'] ?></td>
                                <td><?php echo $user_data['tgl_pesan'] ?></td>
                                <td><?php echo $user_data['jmlh_pesan'] ?></td>
                                <td><?php echo $user_data['pesan'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $user_data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    &nbsp; &nbsp;
                                    <a href="delete.php?id=<?php echo $user_data['id'] ?>"><i class="fa-solid fa-trash" style="color: #ba0d0d;"></i></button></a>
                                </td>
                            <?php }
                            ?>


                            </thead>

                        </table>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
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