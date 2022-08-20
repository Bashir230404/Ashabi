<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="datatransaksi.css">
  <title>Data Transakasi</title>
</head>
<body class="bground">
  <h1>Data Transaksi</h1>
  <br>
  <nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Forum.php"><h5><b>Beranda</b></h5></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <br>
  <br>
<table class="table table-bordered table-striped" border="1">
    <thead style="background-color:yellow;">
    <tr>
    <th>No</th>
    <th>No Transaksi</th>
    <th>Tanggal</th>
    <th>Nama Costumer</th>
    <th>Jumlah Barang</th>
    <th>Sub Total</th>
    <th>Diskon</th>
    <th>Ongkir</th>
    <th>Total</th>
    </tr>
    </thead>
    
  <?php
  
  include "data.php";
  $no=1;
  $ambildata = mysqli_query($conn,"SELECT register_.no, m_costumer.no_transaksi, register_.tanggal, register_.nama, t_sales_det.qty AS jumlah_barang, t_sales.subtotal, register_.diskon, register_.ongkir, t_sales_det.total FROM `register_` JOIN m_barang ON m_barang.kode = register_.kodebarang JOIN t_sales_det ON m_barang.id = t_sales_det.barang_id JOIN t_sales ON t_sales_det.sales_id = t_sales.id JOIN m_costumer ON t_sales.cust_id = m_costumer.id;");
  while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
      <tr>
        <td>$no</td>
        <td>$tampil[no_transaksi]</td>
        <td>$tampil[tanggal]</td>
        <td>$tampil[nama]</td>
        <td>$tampil[jumlah_barang]</td>
        <td>$tampil[subtotal]</td>
        <td>$tampil[diskon]</td>
        <td>$tampil[ongkir]</td>
        <td>$tampil[total]</td>
      </tr>";

      $no++;
  }

  ?>
</table>
  
</body>
</html> 