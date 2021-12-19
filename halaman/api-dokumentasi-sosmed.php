<?php
session_start();
require '../config.php';
require '../lib/session_user.php';
require '../lib/header.php';
?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="text-dark  header-title m-t-0">Melakukan <font color="red">Pemesanan</font></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parameter</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>URL</td>
                                                    <td><?php echo $config['web']['url']; ?>api/sosial-media
                                                    <br />
                                                    <small class="text-danger m-0"> Silahkan pilihan salah satu  </small>
                                                    <br />
                                                    <?php echo $config['web']['url']; ?>api/sosial-media-2</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>pemesanan</td>
                                                </tr>
                                                <tr>
                                                    <td>Layanan</td>
                                                    <td>Service ID <a href="<?php echo $config['web']['url']; ?>halaman/daftar-harga">Daftar Layanan</a></td>
                                                </tr>
                                                <tr>
                                                    <td>target</td>
                                                    <td>Target / Link</td>
                                                </tr>
                                                <tr>
                                                    <td>jumlah</td>
                                                    <td>Jumlah Pemesanan</td>
                                                </tr>
                                                <tr>
                                                    <td>Contoh Kode PHP</td>
                                                    <td><a href="<?php echo $config['web']['url']; ?>halaman/api-sosmed.txt" target="blank">Contoh</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respons Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Pemesanan Sukses

{
  "data": {
          "id": "12345",
          "start_count": "1544"
          }
}

Jika Pemesanan Gagal

{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
                                </div>
                            </div>
                        </div>
                            <!-- end col -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="text-dark  header-title m-t-0">Melakukan <font color="red">Cek Status Pesanan</font></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parameter</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>URL</td>
                                                    <td><?php echo $config['web']['url']; ?>api/sosial-media
                                                    <br />
                                                    <small class="text-danger m-0"> Silahkan pilihan salah satu  </small>
                                                    <br />
                                                    <?php echo $config['web']['url']; ?>api/sosial-media-2</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>status</td>
                                                </tr>
                                                <tr>
                                                    <td>id</td>
                                                    <td>Order ID mu</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respon Yang Didapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Respon Sukses

{
  "data": {
          "id":"23",
          "start_count":"123",
          "status":"Success",
          "remains":"0"
          }
}

Jika Respon Gagal

{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
                                </div>
                            </div>
                        </div>
                            <!-- end col -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                    <h4 class="text-dark  header-title m-t-0">Mendapatkan <font color="red">Layanan</font></h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parameter</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>URL</td>
                                                    <td><?php echo $config['web']['url']; ?>api/sosial-media
                                                    <br />
                                                    <small class="text-danger m-0"> Silahkan pilihan salah satu  </small>
                                                    <br />
                                                    <?php echo $config['web']['url']; ?>api/sosial-media-2</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>layanan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respon Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Sukses Mendapatkan Data Layanannya

{
  "data": {
          "sid": "1"
          "kategori": " Instagram Followers No Refill/Not Guaranteed"
          "layanan": "Instagram Followers KangHL"
          "min": "100"
          "max": "5000"
          "harga": "8919"
          "catatan": "Tronjal Tronjol Maha Asyik"
          }
}

Jika Gagal Mendapatkan Data Layanannya

{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->
<?php
require '../lib/footer.php';
?>