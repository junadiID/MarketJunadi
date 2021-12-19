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
                                    <h4 class="text-dark  header-title m-t-0">Membuat <font color="red">Permintaan</font> Deposit</h4>
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
                                                    <td><?php echo $config['web']['url']; ?>api/deposit</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>request</td>
                                                </tr>
                                                <tr>
                                                    <td>provider</td>
                                                    <td>TSEL/XL/DANA/OVO/GOPAY</td>
                                                </tr>
                                                <tr>
                                                    <td>pengirim</td>
                                                    <td>Nama / Nomer Pengirim</td>
                                                </tr>
                                                <tr>
                                                    <td>jumlah</td>
                                                    <td>Jumlah Deposit ( Minimal Rp 10.000 )</td>
                                                </tr>
                                                <tr>
                                                    <td>Contoh Kode PHP</td>
                                                    <td><a href="<?php echo $config['web']['url']; ?>halaman/api-deposit.txt" target="blank">Contoh</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respons Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Sukses Membuat Permintaan Deposit

{
  "status": true,
  "data": {
          "pesan": "Deposit Berhasil Diterima",
          "code": "12345",
          "jumlah_tf": 10909,
          "amount": 10909,
          "provider": "OVO",
          "tujuan": "085926151227 A/N BAGAS ADITYO. N"
          }
}

Jika Gagal Membuat Permintaan Deposit

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
                                    <h4 class="text-dark  header-title m-t-0"><font color="red">Konfirmasi</font> Deposit</h4>
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
                                                    <td><?php echo $config['web']['url']; ?>api/deposit</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>konfirmasi</td>
                                                </tr>
                                                <tr>
                                                    <td>provider</td>
                                                    <td>Provider Deposit Saat Membuat Permintaan</td>
                                                </tr>
                                                <tr>
                                                    <td>code</td>
                                                    <td>Kode Deposit Saat Membuat Permintaan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respon Yang Didapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Sukses Mengkonfirmasi Deposit

{
  "status": true,
  "data": {
          "status": "Success",
          "pesan": "Deposit Berhasil Diterima",
          "jumlah": 10909,
          "amount": 10909,
          "provider": "OVO"
          }
}

Jika Gagal Mengkonfirmasi Deposit

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
                                    <h4 class="text-dark  header-title m-t-0"><font color="red">Membatalkan</font> Deposit</h4>
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
                                                    <td><?php echo $config['web']['url']; ?>api/deposit</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td>Api Keymu</td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>cancel</td>
                                                </tr>
                                                <tr>
                                                    <td>provider</td>
                                                    <td>Provider Deposit Saat Membuat Permintaan</td>
                                                </tr>
                                                <tr>
                                                    <td>code</td>
                                                    <td>Kode Deposit Saat Membuat Permintaan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respon Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Sukses Membatalkan Deposit

{
  "status": true,
  "data": {
          "pesan": "Deposit Berhasil Dibatalkan"
          }
}

Jika Gagal Membatalkan Deposit

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