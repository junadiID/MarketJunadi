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
                                    <h4 class="text-dark  header-title m-t-0">Melakukan <font color="red">SMS Gateway</font></h4>
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
                                                    <td><?php echo $config['web']['url']; ?>api/sms-gateway</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td><input type="text" class="form-control" name="nama" value="<?php echo $data_user['api_key']; ?>" readonly></td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>sms_gateway</td>
                                                </tr>
                                                <tr>
                                                    <td>tujuan</td>
                                                    <td>Nomor Handphone Tujuan</td>
                                                </tr>
                                                <tr>
                                                    <td>pesan</td>
                                                    <td>Isi Pesan Yang Ingin Dikirim</td>
                                                </tr>
                                                <tr>
                                                    <td>Contoh Kode PHP</td>
                                                    <td><a href="<?php echo $config['web']['url']; ?>halaman/api-sms.txt" target="blank">Contoh</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respon Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Request Sukses

{
  "data": {
          "id": "12345"
          }
}

Jika Request Gagal

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
                                    <h4 class="text-dark  header-title m-t-0">Melakukan <font color="red">Cek Status SMS</font></h4>
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
                                                    <td><?php echo $config['web']['url']; ?>api/sms-gateway</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td><input type="text" class="form-control" name="nama" value="<?php echo $data_user['api_key']; ?>" readonly></td>
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
          "status":"Success"
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


                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->
<?php
require '../lib/footer.php';
?>\