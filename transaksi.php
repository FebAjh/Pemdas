<?php
//ambil

$paket = $_GET["paket"];
$harga = $_GET["harga"];
$pembayaran = "";

if (isset($_POST['totalkan'])){
  $total = $_POST['tambahan'] + $harga;
  header("location:transaksi.php?paket=$paket&harga=$harga&total=$total");
}
if (empty($_GET['total'])){
  $total = "";
} else {
  $total = $_GET['total'];
}

if (isset($_POST['kembalian'])){
  echo intval($total);
  echo intval($_POST['bayar']);
  $pembayaran =  intval($_POST['bayar']) - intval($total); 
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End navbar -->
<!-- TRF -->
<form action="" method="post">
<div class="container-fluid">
    <div class="card mt-3" style=background-color: #567189;>
        <div class="card-body">
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-5">
                No Transaksi
            </div>
            <div class="col-md-2 ms-0 mt-5">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" name="notransaksi" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2">
                Tanggal Transaksi
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Nama Customer
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Pilihan produk
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control p-4" aria-label="Username" value="<?= $paket; ?>" aria-describedby="basic-addon1">
</div>
            </div>
           </div>
           <div class="row">
            <div class="col-md-1 ms-5 me-0 mt-2 mb-5">
                Harga produk
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control p-4" aria-label="Username" value="<?= intval($harga); ?>" aria-describedby="basic-addon1">
</div>
            </div>
            <div class="col-md-2 ms-0 mt-2">
            <button type="submit" name="totalkan" class="btn btn-primary">Hitung Total Harga</button>
            </div>
           </div>
           </div>
           </div>
            </div>
            <div class="container-fluid mt-3">
              <div class="row">
              <div class="col-md-1 ms-5 me-0 mt-2">
                Total Harga
            </div>
            <div class="col-md-2 ms-3 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control" aria-label="Username" name="totalharga"  value="<?= $total ?>" aria-describedby="basic-addon1">
</div>
            </div>
            <div class="col-md-2 mt-2" style="margin-left: 20rem;">
            Pembayaran Berhasil
            </div>
              </div>
              <div class="row">
              <div class="col-md-1 ms-5 me-0 mt-2">
                Pembayaran
            </div>
            <div class="col-md-2 ms-3 mt-2">
            <div class="input-group mb-3">
  <input type="text" class="form-control" name="bayar" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
            <div class="col-md-2 mt-2 " style="margin-left: 20rem; margin-right: -9rem;">
            Kembalian
            </div>
            <div class="col-md-2 mt-2">
            <div class="input-group mb-3 ms-5">
  <input type="text" class="form-control" value="<?= $pembayaran ?>" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
              </div>
              <div class="row">
                <div class="col-md-2 mt-2 " style="margin-left: 10rem;">
                <button type="submit" name="kembalian" class="btn btn-warning">Hitung Kembalian</button>
                </div>
                <div class="col-md-2 mt-2 " style="margin-left: 30rem;">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Modal1">Simpan Transaksi</button>
                </div>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="Modal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <center>
                  <div class="modal-body">
                  Transaksi berhasil kembali ke Home
                  </div>
                  </center>
                  <div class="modal-footer">
                    <a class="btn btn-success nav-link text-white" type="button" aria-current="page" href="dashboard.php">Ok</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
<!-- END Trf -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>