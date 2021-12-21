<?php
session_start();
require("config.php");
if (!isset($_SESSION['user'])) {    
exit(header("Location: ".$config['web']['url']."home/"));
} else {     
require("lib/header.php");  
$sess_username = $_SESSION['user']['username'];
?>              
                     <div class="row">
	                <div class="col-12">
	                <div class="card card-body">
	                    <div class="row">
	                        <div class="col-6">
        	                    <strong><div class="mb-0 text-primary" style="margin-top: -5px !important; margin-bottom: -10px !important;"><i class="mdi mdi-whatsapp"></i> Grub WhatsApp </div></strong> 
        	                </div>
    	                    <div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
            	                <a href="#" class="btn btn-xs btn-primary"> <i class="mdi mdi-check-circle"></i> Masuk</a>
    	                    </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-12" style="margin-top: -17px;">
	                <div class="card card-body">
	                    <div class="row">
	                        <div class="col-6">
        	                    <h5 class="mb-0 text-primary" style="margin-top: -5px !important; margin-bottom: -10px !important;"><i class="ti ti-wallet"></i><b> Rp <?php echo number_format($data_user['saldo'],0,',','.'); ?></b></h5>
        	                </div>
    	                    <div class="col-6 text-right" style="margin-top: -10px !important; margin-bottom: -10px !important;">
            	                <a href="/pay/index" class="btn btn-xs btn-primary"> <i class=" fas fa-plus-circle "></i> Deposit Saldo </a>
    	                    </div>
	                    </div>
	                </div>
	            </div>
	            </div>
	            <div class="row">
	            <div class="col-md-12" style="margin-top: -10px;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
                    <div class="carousel-inner">                                       
          <div class="carousel-item active">
          <img class="d-block w-100" src="assets/slide/slide.1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="assets/slide/slide.2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="assets/slide/slide.3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="assets/slide/slide.4.jpg" alt="Fourth slide">
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
             </div>
                  </div>    
                       </div>
                            </div>                                     
                <div class="row">
                    <div class="col-12" style="margin-top: 15px;">
	                <div class="card text-center">
	                    <table class="table table-bordered mb-0">
                            <tbody>
                                <tr>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/pulsa" class="btn-loading"><i class="mdi mdi-cellphone-iphone fa-3x"></i>
                                            <a href="/pemesanan/pulsa" class="btn-loading"><h5  class="text-primary">Pulsa Reguler</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/pulsa-transfer" class="btn-loading"><i class="mdi mdi-cellphone-iphone fa-3x"></i>
                                            <a href="/pemesanan/pulsa-transfer" class="btn-loading"><h5  class="text-primary">Pulsa Transfer</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/telepon-sms" class="btn-loading"><i class="mdi mdi-phone-in-talk fa-3x"></i>
                                            <a href="/pemesanan/telepon-sms" class="btn-loading"><h5  class="text-primary">Telepon & SMS</h5>
                                        </a>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/game" class="btn-loading"><i class="mdi mdi-gamepad-variant  fa-3x"></i>
                                            <a href="/pemesanan/game" class="btn-loading"><h5  class="text-primary">Voucher Game</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/pln" class="btn-loading"><i class="mdi mdi-lightbulb-on-outline fa-3x"></i>
                                            <a href="/pemesanan/pln" class="btn-loading"><h5  class="text-primary">Token PLN Prabayar</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/e-money" class="btn-loading"><i class="mdi mdi-cash-100 fa-3x"></i>
                                            <a href="/pemesanan/e-money" class="btn-loading"><h5  class="text-primary">Saldo E-money</h5>
                                        </a>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/paket" class="btn-loading"><i class="mdi mdi-earth  fa-3x"></i>
                                            <a href="/pemesanan/paket" class="btn-loading"><h5  class="text-primary">Paket Data</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/voucher" class="btn-loading"><i class="mdi mdi-ticket   fa-3x"></i>
                                            <a href="/pemesanan/voucher" class="btn-loading"><h5  class="text-primary">Voucher</h5>                                            
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/pulsain" class="btn-loading"><i class="mdi  mdi-google-earth fa-3x"></i>
                                            <a href="/pemesanan/pulsain" class="btn-loading"><h5  class="text-primary">Pulsa Internasional</h5>
                                        </a>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <th>
                                        <a href="/orders" class="text-primary">
                                            <a href="/pemesanan/sosial-media" class="btn-loading"><i class="mdi mdi-instagram  fa-3x"></i>
                                            <a href="/pemesanan/sosial-media" class="btn-loading"><h5  class="text-primary">Social Media</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="/orders" class="text-primary">
                                            <a href="/pemesanan/wifiid" class="btn-loading"><i class="mdi mdi-wifi  fa-3x"></i>
                                            <a href="/pemesanan/wifiid" class="btn-loading"><h5  class="text-primary">Voucher Wifi.id</h5>
                                        </a>
                                    </th>
                                    <th>
                                        <a href="" class="text-primary">
                                            <a href="/pemesanan/tv" class="btn-loading"><i class="mdi mdi-television fa-3x"></i>
                                            <a href="/pemesanan/tv" class="btn-loading"><h5  class="text-primary">TV Kabel</h5>
                                        </a>
                                    </th>
                                </tr>                                                                
                            </tbody>
                        </table>
	                </div>
	            </div>
	        </div>
	    
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3"><i class=" mdi mdi-newspaper "></i> Berita & Informasi Terbaru</h4>
                                        <br />
                                        <table class="table footable toggle-square">
                                            <tbody>
                                                <?php $check_news = $conn->query("SELECT * FROM berita ORDER BY id DESC LIMIT 5"); ?>
                                                <?php while ($data_news = $check_news->fetch_assoc()) { ?>
                                                <?php
                                                    if ($data_news['tipe'] == "INFORMASI") $btn = "info";
                                                    if ($data_news['tipe'] == "PERINGATAN") $btn = "warning";
                                                    if ($data_news['tipe'] == "PENTING") $btn = "danger";
                                                    if ($data_news['tipe'] == "OFF Layanan") $btn = "primary";
                                                    if ($data_news['tipe'] == "NEW Layanan") $btn = "success";
                                                ?>
                                                <tr>
                                                    <td width="60"><a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="btn btn-lg btn-<?= $btn; ?>"><i class="fas fa-info-circle"></i></a></td>
                                                    <td style="vertical-align: middle !important;"><h6><a href="<?= $config['web']['url']; ?>user/news?id=<?= $data_news['id']; ?>" class="text-dark"><?= $data_news['subjek']; ?></a></h6></td>                                                 
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                        <a href="<?= $config['web']['url']; ?>user/news" class="btn btn-primary waves-effect">Tampilkan Semua...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3"><i class=" mdi mdi-history "></i> 10 Transaksi Terakhir Pulsa & Lainnya</h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hovered nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Transaksi</th>
                                                        <th>Harga</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $nomer = 1; ?>
                                                    <?php $cek_pesanan = $conn->query("SELECT * FROM pembelian_pulsa WHERE user = '$sess_username' ORDER BY id DESC LIMIT 10"); ?>
                                                    <?php while ($data_pesanan = $cek_pesanan->fetch_assoc()) { ?>
                                                    <?php if ($data_pesanan['status'] == "Success"){ $color = "success"; }
                                                        else if ($data_pesanan['status'] == "Pending"){ $color = "warning"; }
                                                        else if ($data_pesanan['status'] == "Error"){ $color = "danger"; }
                                                        else if ($data_pesanan['status'] == "Processing"){ $color = "primary";
                                                    } ?>
                                                    <tr>
                                                        <td><?= $nomer++; ?></td>
                                                        <td><?= $data_pesanan['date']." ".$data_pesanan['time']; ?></td>
                                                        <td><?= $data_pesanan['layanan']; ?></td>
                                                        <td><?= $data_pesanan['harga']; ?></td>
                                                        <td><label class="badge badge-<?= $color; ?>"><?= $data_pesanan['status']; ?></label></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
}
require 'lib/footer.php';
?>