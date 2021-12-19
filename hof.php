<?php
session_start();
require 'config.php';
require 'lib/session_user.php';
require 'lib/header.php';

$pembelian_sosmed = $conn->query("SELECT SUM(pembelian_sosmed.harga) AS total_pembelian, count(pembelian_sosmed.id) AS tcount, pembelian_sosmed.user, users.username FROM pembelian_sosmed JOIN users ON pembelian_sosmed.user = users.username WHERE MONTH(pembelian_sosmed.date) = '".date('m')."' AND YEAR(pembelian_sosmed.date) = '".date('Y')."' GROUP BY pembelian_sosmed.user ORDER BY total_pembelian DESC LIMIT 5");
$pembelian_pulsa = $conn->query("SELECT SUM(pembelian_pulsa.harga) AS total_pembelian, count(pembelian_pulsa.id) AS tcount, pembelian_pulsa.user, users.username FROM pembelian_pulsa JOIN users ON pembelian_pulsa.user = users.username WHERE MONTH(pembelian_pulsa.date) = '".date('m')."' AND YEAR(pembelian_pulsa.date) = '".date('Y')."' GROUP BY pembelian_pulsa.user ORDER BY total_pembelian DESC LIMIT 5");
?>
      <div class="row">
         <div class="col-md-12 text-center">
           <h4>Top 5 Pengguna Pemesanan Bulan Ini</h4>
               <p>Kami <?php echo $data['short_title']; ?> Group mengucapkan terimakasih telah menjadi pelanggan setia di <?php echo $data['short_title']; ?></p>
        	  </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 text-uppercase text-center header-title"><i class="ti-medall text-primary"></i> Top Pembelian Sosial Media</h4><hr>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered nowrap m-0">
                                    <thead>
                                    <tr>
                                        <th width="1%">Peringkat</th>
                                        <th>Nama</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php 
$no = 1;
while($data = mysqli_fetch_array($pembelian_sosmed)) {
$total_pembelian = number_format($data['total_pembelian'],0,',','.');
$tcount = number_format($data['tcount'],0,',','.');
?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td>Rp <?php echo $total_pembelian; ?> Dari <?php echo $tcount; ?> Pemesanan</td>
                                    </tr>
                                    
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                                        </ul>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 text-uppercase text-center header-title"><i class="ti-medall text-primary"></i> Top Pembelian Pulsa & Lainnya</h4><hr>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered nowrap m-0">
                                    <thead>
                                    <tr>
                                        <th width="1%">Peringkat</th>
                                        <th>Nama</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php 
$no = 1;
while($data = mysqli_fetch_array($pembelian_pulsa)) {
$total_pembelian = number_format($data['total_pembelian'],0,',','.');
$tcount = number_format($data['tcount'],0,',','.');
?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td>Rp <?php echo $total_pembelian; ?> Dari <?php echo $tcount; ?> Pemesanan</td>
                                    </tr>   
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                                        </ul>
                        </div>
                    </div>
                </div>
             </div>      
<?php
require 'lib/footer.php';
?>