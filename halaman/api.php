<?php
session_start();
require '../config.php';
require '../lib/header.php';
?>
                <div class="row">
	           <div class="col-lg-12">
		       <div class="alert alert-primary alert-dismissible">
		       <p>
		       <h4><b> Perhatian !!! </b></h4>
                       <li>Pastikan Anda memahami bahasa pemrograman komputer untuk melakukan transaksi via API. Dokumentasi API silakan lihat dibawah ini</li>
                       <li>Jika Anda tidak paham apa itu pemrograman / API sebaiknya STOP membaca halaman ini.</li>
                       <br>
                       <h4><b> Di bawah ini adalah Syarat & Ketentuan untuk menggunakan layanan API PULSA </b></h4>
                       <li>Terdaftar di GRACE-PANEL untuk mendapat <b>API Key</b> transaksi.</li>
                       <li>Memiliki <b>IP Statis</b> demi keamanan transaksi Anda.</li>
                       <li>Menyediakan <b>URL Callback</b> untuk menerima pembaruan/update status transaksi. (Opsional)</li>
                       <li><b>API Key</b>, <b>IP Statis</b>, dan <b>URL Callback</b> dapat diubah/diatur pada halaman Profil Saya.</li>
                       </p>
		     </div>
		  </div>
		</div>

 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs tabs-bordered">
              
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pulsa">Pulsa & Lainnya</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sosmed_1">Sosial Media Server 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sosmed_2">Sosial Media Server 2</a></li>
                    
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deposit">Deposit Otomatis</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Informasi Akun</a></li>
                </ul>
                <div class="tab-content">
                    <div id="pulsa" class="tab-pane active">
                        <center>
                            <h4 class="text-primary">Sosial Media Server 1</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'Sosial Media'"); ?>
                        <?php while ($dpr = $cpr->fetch_assoc()) { ?>
                        <center><h3><?= $dpr['nama']; ?></h3></center><br />
                            <?php $cprl = $conn->query("SELECT * FROM layanan_sosmed WHERE kategori = '".$dpr['kode']."' ORDER BY harga ASC"); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered mb-1">
                                    <thead>
                                        <tr>
                                            <th width="200">ID</th>
                                            <th width="500">Nama Produk</th>
                                            <th width="200">Harga/1000</th>
                                            <th width="200">Harga H2H/1000</th>
                                            <th width="200">Min</th>
                                            <th width="200">Max</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dprl = $cprl->fetch_assoc()) { ?>
                                        <?php
                                        if ($dprl['status'] == "Aktif") {
                                            $label = "success";
                                        } else {
                                            $label = "danger";
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $dprl['service_id']; ?></td>
                                            <td><?= $dprl['layanan']; ?></td>
                                            <td>Rp <?= number_format($dprl['harga'],0,',','.'); ?></td>
                                            <td>Rp <?= number_format($dprl['harga_api'],0,',','.'); ?></td>
                                            <td><?= number_format($dprl['min'],0,',','.'); ?></td>
                                            <td><?= number_format($dprl['max'],0,',','.'); ?></td>
                                            <td><label class="btn btn-xs btn-<?= $label; ?>"><?= $dprl['status']; ?></label></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="sosmed_1" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Sosial Media Server 2</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'SOSMED'"); ?>
                        <?php while ($dpr = $cpr->fetch_assoc()) { ?>
                        <center><h3><?= $dpr['nama']; ?></h3></center><br />
                            <?php $cprl = $conn->query("SELECT * FROM layanan_sosmed WHERE kategori = '".$dpr['kode']."' ORDER BY harga ASC"); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered mb-1">
                                    <thead>
                                        <tr>
                                            <th width="200">ID</th>
                                            <th width="500">Nama Produk</th>
                                            <th width="200">Harga/1000</th>
                                            <th width="200">Harga H2H/1000</th>
                                            <th width="200">Min</th>
                                            <th width="200">Max</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dprl = $cprl->fetch_assoc()) { ?>
                                        <?php
                                        if ($dprl['status'] == "Aktif") {
                                            $label = "success";
                                        } else {
                                            $label = "danger";
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $dprl['service_id']; ?></td>
                                            <td><?= $dprl['layanan']; ?></td>
                                            <td>Rp <?= number_format($dprl['harga'],0,',','.'); ?></td>
                                            <td>Rp <?= number_format($dprl['harga_api'],0,',','.'); ?></td>
                                            <td><?= number_format($dprl['min'],0,',','.'); ?></td>
                                            <td><?= number_format($dprl['max'],0,',','.'); ?></td>
                                            <td><label class="btn btn-xs btn-<?= $label; ?>"><?= $dprl['status']; ?></label></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="sosmed_2" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Pulsa Reguler</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'PULSA'"); ?>
                        <?php while ($dpr = $cpr->fetch_assoc()) { ?>
                        <center><h3><?= $dpr['nama']; ?></h3></center><br />
                            <?php $cprl = $conn->query("SELECT * FROM layanan_pulsa WHERE operator = '".$dpr['kode']."' "); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered mb-1">
                                    <thead>
                                        <tr>
                                            <th width="200">ID</th>
                                            <th width="500">Nama Produk</th>
                                            <th width="200">Harga</th>
                                            <th width="200">Harga H2H</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dprl = $cprl->fetch_assoc()) { ?>
                                        <?php
                                        if ($dprl['status'] == "Normal") {
                                            $label = "success";
                                        } else {
                                            $label = "danger";
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $dprl['service_id']; ?></td>
                                            <td><?= $dprl['layanan']; ?></td>
                                            <td>Rp <?= number_format($dprl['harga'],0,',','.'); ?></td>
                                            <td>Rp <?= number_format($dprl['harga_api'],0,',','.'); ?></td>
                                            <td><label class="btn btn-xs btn-<?= $label; ?>"><?= $dprl['status']; ?></label></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="deposit" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Voucher Game</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'VGAME'"); ?>
                        <?php while ($dpr = $cpr->fetch_assoc()) { ?>
                        <center><h3><?= $dpr['nama']; ?></h3></center><br />
                            <?php $cprl = $conn->query("SELECT * FROM layanan_pulsa WHERE operator = '".$dpr['kode']."' "); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered mb-1">
                                    <thead>
                                        <tr>
                                            <th width="200">ID</th>
                                            <th width="500">Nama Produk</th>
                                            <th width="200">Harga</th>
                                            <th width="200">Harga H2H</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dprl = $cprl->fetch_assoc()) { ?>
                                        <?php
                                        if ($dprl['status'] == "Normal") {
                                            $label = "success";
                                        } else {
                                            $label = "danger";
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $dprl['service_id']; ?></td>
                                            <td><?= $dprl['layanan']; ?></td>
                                            <td>Rp <?= number_format($dprl['harga'],0,',','.'); ?></td>
                                            <td>Rp <?= number_format($dprl['harga_api'],0,',','.'); ?></td>
                                            <td><label class="btn btn-xs btn-<?= $label; ?>"><?= $dprl['status']; ?></label></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="profile" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Paket Internet</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'PKIN'"); ?>
                        <?php while ($dpr = $cpr->fetch_assoc()) { ?>
                        <center><h3><?= $dpr['nama']; ?></h3></center><br />
                            <?php $cprl = $conn->query("SELECT * FROM layanan_pulsa WHERE operator = '".$dpr['kode']."' "); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered mb-1">
                                    <thead>
                                        <tr>
                                            <th width="200">ID</th>
                                            <th width="500">Nama Produk</th>
                                            <th width="200">Harga</th>
                                            <th width="200">Harga H2H</th>
                                            <th width="100">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($dprl = $cprl->fetch_assoc()) { ?>
                                        <?php
                                        if ($dprl['status'] == "Normal") {
                                            $label = "success";
                                        } else {
                                            $label = "danger";
                                        }
                                        ?>
                                        <tr>
                                            <td><?= $dprl['service_id']; ?></td>
                                            <td><?= $dprl['layanan']; ?></td>
                                            <td>Rp <?= number_format($dprl['harga'],0,',','.'); ?></td>
                                            <td>Rp <?= number_format($dprl['harga_api'],0,',','.'); ?></td>
                                            <td><label class="btn btn-xs btn-<?= $label; ?>"><?= $dprl['status']; ?></label></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        
    });
</script>
<?php
require '../lib/footer.php';
?>