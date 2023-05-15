<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Icon Font Stylesheet -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>pesan</title>
</head>
  <header class="p-3 " style="background-color: #0C134F;">
    <div class="container" >
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" >
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
        <div class="m-1">
            <img src="../frontend/picture/icon.png"  alt="" style="border-radius: 100%;" width="40" height="40">
        </div>
        <h3 style="color:aliceblue;">BOOK STORE</h3>
        &nbsp;  &nbsp;
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
        </ul>
        <div class="text-end">
        <a href="../backend/user.php"><img src="../frontend/picture/matthew.jpg" alt="" style="border-radius: 100%;" width="35" height="35"></a>
        <p></p>
        </div>
      </div>
    </div>
  </header>
<body>
    <div class="row align-items-md-stretch py-5 m-2">
        <div class="col-md-4">
            <div class="h-100 p-5 text-bg-light rounded-3">
                <img src="../frontend/picture/sejarah dunia lengkap.jpeg" alt="" width="300" height="400">
            </div>
        </div>
        <div class="col-md-8">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h4>Sejarah DUNIA Lengkap</h4>
                <p style="color:dimgray;">4.8 <i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i><i class="fa-solid fa-star" style="color: #ffea00;"></i>
                <i class="fa-solid fa-star-half" style="color: #ffea00;"></i> |  2.1k Penilaian | 3.1k Terjual</p>
                <h2 style="color:cornflowerblue;">Rp.232.000</h2>
                <p style="color:cadetblue;">History | Edukasi | B01 | </p>

                <p><img src="../frontend/picture/centang.png" class="m-2" alt="" width="35" height="35">GARANSI BARANG ORI 100%</p>
                <div class="row align-items-md-stretch " >
                    <div class="col-md-2">
                        <p style="color:#394867; ">Delivery</p>
                    </div>
                    <div class="col-md-4">
                        <p style="color: #537188;"><i class="fa-solid fa-shield-heart" style="color: #223658;"></i>  Safety Packing</p>
                        <p style="color: #537188;"><i class="fa-solid fa-truck-fast" style="color: #223658;"></i> Fast Delivery</p>
                    </div>
                </div>
                <div class="row align-items-md-stretch ">
                    <div class="col-md-2">
                        <p style="color:#394867;">Payment</p>
                    </div>
                    <div class="col-md-4">
                        <p style="color: #537188;"><i class="fa-regular fa-credit-card" style="color: #223658;"></i>  Credit Cart</p>
                        <p style="color: #537188;"><i class="fa-regular fa-handshake" style="color: #223658;"></i>  Cash on Delivery</p>
                    </div>
                </div>
                <form action="sejarah1.php" method="post" name="form1">
                    <div class="container-fluid px-4">
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
                            <div>
                                <button class="btn  py-1 px-3 animated slideInDown" style="background-color: cornflowerblue;" value="add" type="Submit" name="Submit">Add to Cart</button>
                                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="../backend/user.php">
                                    <i class="fa-solid fa-cart-shopping" style="color: #4070c4;"></i>
                                </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>