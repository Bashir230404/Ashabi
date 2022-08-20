<?php
  include "data.php";
  $no  = $_REQUEST['no'];
  $tanggal  = $_REQUEST['tanggal'];
  $kode_barang  = $_REQUEST['kodebarang'];
  $nama = $_REQUEST['nama'];
  $telp  = $_REQUEST['telp'];
  $diskon = $_REQUEST['diskon'];
  $ongkir = $_REQUEST['ongkir'];
  $mysqli  = "INSERT INTO register_ ( no, tanggal, kodebarang, nama, telp, diskon, ongkir) VALUES ('$no', '$tanggal', '$kode_barang', '$nama', '$telp', '$diskon', '$ongkir')";
  $result  = mysqli_query($conn, $mysqli);

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <div class="alert alert-success" role="alert">
    Data Berhasil Di Masukan
  </div>
  <div class="row">
    <div class="col-md-2"><a href="Untitled-3.php"><button type="button" class="btn btn-primary">Lihat Data</button></div>
    <br>
    <div class="col-md-2"><a href="Forum.php"><button type="button" class="btn btn-primary" >Kembali Ke Menu</button></div>
  </div>

</body>
</html>
