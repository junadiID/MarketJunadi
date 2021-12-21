<?php
session_start();
require '../config.php';
require '../lib/header.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs tabs-bordered">
              
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sosmed">Sosial Media Server 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sosmed2">Sosial Media Server 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pulsa-reguler">Pulsa Reguler</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#voucher-game">Voucher Game</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paket-internet">Paket Internet</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#paket-sms-telepon">Paket SMS & Telepon</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pulsa-transfer">Pulsa Transfer</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#saldo-emoney">Saldo E-Money</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#token-pln">Token PLN</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#lainnya">Lainnya</a></li>
                </ul>
                <div class="tab-content">
                    <div id="sosmed" class="tab-pane active">
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
                    <div id="sosmed2" class="tab-pane">
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
                    <div id="pulsa-reguler" class="tab-pane">
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="voucher-game" class="tab-pane">
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="paket-internet" class="tab-pane">
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="paket-sms-telepon" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Paket SMS & Telepon</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'PKSMS'"); ?>
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="pulsa-transfer" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Pulsa Transfer</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'PT'"); ?>
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="saldo-emoney" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Saldo E-Money</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'SALGO'"); ?>
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="token-pln" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Token PLN</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'TOKENPLN'"); ?>
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
                                            <td><?= $dprl['provider_id']; ?></td>
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
                    <div id="lainnya" class="tab-pane">
                        <center>
                            <h4 class="text-primary">Layanan Lainnya</h4>
                            Terakhir Diperbarui <?php
echo date('j F Y');
?>
                        </center><br />
                        <?php $cpr = $conn->query("SELECT * FROM kategori_layanan WHERE tipe = 'LAINYA'"); ?>
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
                                            <td><?= $dprl['provider_id']; ?></td>
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