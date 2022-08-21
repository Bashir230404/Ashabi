<!DOCTYPE html>
<html lang="en">
<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="forumstyle.css">
    <title>Form Transaksi</title>
</head>
<body class="" style="background-color:bisque;">

    <?php
        include 'data.php';
        $query = mysqli_query($conn, "SELECT max(no) as NO FROM register_");
	    $data = mysqli_fetch_array($query);
	    $nom = $data['NO'];

        $nom++;
    ?>
    <br>
    <div class="container-fluid">
    <div class="d-grid gap-2">
    <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Menu</button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <p>Forum transaksi dapat memudahkan proses transaksi dan detail riwayat transakasi</p>
        <a class="btn btn-secondary" href="Forum.php" role="button">Beranda</a>
        <a class="btn btn-secondary" href="Untitled-3.php" role="button">Daftar Transaksi</a>
      </div>
    </div>
    </div>
    </div>
        <br>
    </div>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="">
                    <form  action="Untitled-1.php" method="post">
                        <h5 class="col-md-4" style="background-color:silver;padding: 10px;">Trasnsaksi</h5>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-1">
                                    <label for="">No</label>
                                    <input type="text" class="form-control" name="no" required="required" value="<?php echo $nom ?>" readonly>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" autocomplete = "off">
                                </div>
                            </div><br>

                        <h5 class="col-md-4" style="background-color:silver;padding: 10px;">Costumer</h5>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="">Kode</label>
                                    <select class="form-control" name="kodebarang">
                                        <option value=""></option>
                                        <option value="A001">A001</option>
                                        <option value="C025">C025</option>
                                        <option value="A102">A102</option>
                                        <option value="A301">A301</option>
                                        <option value="B221">B221</option>
                                    </select>
                                </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama" autocomplete = "off">
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-2">
                                        <label for="">Telp</label>
                                        <input type="text" class="form-control" name="telp" autocomplete = "off"><br>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="d-flex justify-content-end">
                            <table class="table table-bordered table-striped">
                                        <thead style="background-color:white;text-align:center;">
                                        <tr>
                                        <th>Tambah</th>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Qty</th>
                                        <th>Harga Bandrol</th>
                                        <th>Diskon %</th>
                                        <th>Diskon Rp</th>
                                        <th>Harga Diskon</th>
                                        <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody style="text-align:center;">
                                        <tr>
                                            <td>
                                                <a href="">Ubah</a> |
                                                <a href="">Hapus</a>
                                            </td>
                                            <td>1</td>
                                            <td>A001</td>
                                            <td>Barang A</td>
                                            <td>1</td>
                                            <td>200,000.00</td>
                                            <td>0%</td>
                                            <td></td>
                                            <td>200,000.00</td>
                                            <td>200,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Ubah</a> |
                                                <a href="">Hapus</a>
                                            </td>
                                            <td>2</td>
                                            <td>C025</td>
                                            <td>Barang B</td>
                                            <td>2</td>
                                            <td>350,000.00</td>
                                            <td>15%</td>
                                            <td>52,000.00</td>
                                            <td>297,500.00</td>
                                            <td>595,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Ubah</a> |
                                                <a href="">Hapus</a>
                                            </td>
                                            <td>3</td>
                                            <td>A102</td>
                                            <td>Barang C</td>
                                            <td>2</td>
                                            <td>125,000.00</td>
                                            <td>20%</td>
                                            <td>25,000.00</td>
                                            <td>100,000.00</td>
                                            <td>200,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Ubah</a> |
                                                <a href="">Hapus</a>
                                            </td>
                                            <td>4</td>
                                            <td>A301</td>
                                            <td>Barang D</td>
                                            <td>3</td>
                                            <td>300,000.00</td>
                                            <td>0%</td>
                                            <td></td>
                                            <td>300,000.00</td>
                                            <td>900,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="">Ubah</a> |
                                                <a href="">Hapus</a>
                                            </td>
                                            <td>5</td>
                                            <td>B221</td>
                                            <td>Barang E</td>
                                            <td>2</td>
                                            <td>300,000.00</td>
                                            <td>0%</td>
                                            <td></td>
                                            <td>300,000.00</td>
                                            <td>600,000.00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>Sub Total</b></td>
                                            <td><b>2,495,000.00</b></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>Diskon</b></td>
                                            <td>
                                                <input type="text" class="form-control" name="diskon" autocomplete = "off">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>Ongkir</b></td>
                                            <td>
                                            <input type="text" class="form-control" name="ongkir" autocomplete = "off">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><b>Total</b></td>
                                            <td><b>2,479,000.00</b></td>
                                        </tr>
                                        </tbody>

                                      </table>
                                      </div>
                                      <br>

                        <div class="row" style="margin-left:500px;">
                            <div class="col-md-3">
                            <button class="btn btn-secondary">Simpan</button>
                            </div>
                            <div class="col-md-3">
                            <button class="btn btn-secondary" type="reset">Batal</button>
                            </div>
                        </div>    
                        </div>
                    </form>
                    <br> 
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>