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
                                                    <td><?php echo $config['web']['url']; ?>api/pulsa</td>
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
                                                    <td>layanan</td>
                                                    <td>Service ID <a href="<?php echo $config['web']['url']; ?>halaman/daftar-harga">Daftar Layanan</a></td>
                                                </tr>
                                                <tr>
                                                    <td>target</td>
                                                    <td>Target / Tujuan</td>
                                                </tr>
                                                <tr>
                                                    <td>no_meter</td>
                                                    <td>No Meter PLN Jika Melakukan Pemesanan Token PLN</td>
                                                </tr>
                                                <tr>
                                                    <td>Contoh Kode PHP</td>
                                                    <td><a href="<?php echo $config['web']['url']; ?>halaman/api-pulsa.txt" target="blank">Contoh</a></td>
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
          "id": "12345"
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
                                                    <td><?php echo $config['web']['url']; ?>api/pulsa</td>
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
          "status":"Success",
          "catatan":"SN : 09220xxxxxxxx"
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
                                                    <td><?php echo $config['web']['url']; ?>api/pulsa</td>
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
          "operator": "AXIS"
          "layanan": "AXIS 5000"
          "harga": "5543"
          "status": "Normal"
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