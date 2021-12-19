<?php
session_start();
require '../config.php';
require '../lib/session_login_admin.php';
require '../lib/header_admin.php';
?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="bg-icon float-left">
                                            <i class="mdi mdi-account-multiple"></i>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-uppercase font-14 m-b-10 font-600">Total Pengguna</p>
                                            <h3 class="m-b-10"><span><?php echo $total_pengguna; ?></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="bg-icon float-left">
                                            <i class="mdi mdi-cart-plus"></i>
                                        </div>
                                        <div class="text-right">
                                            <p class="m-b-10 text-uppercase font-14 font-600">Total Pemesanan Sosmed</p>
                                            <h3 class="m-b-10">
                                            	<span>                                            	
                                            	Rp <?php echo number_format($data_pesanan_sosmed['total'],0,',','.'); ?> Dari <?php echo $count_pesanan_sosmed; ?> Pesanan	
                                            	</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="bg-icon float-left">
                                            <i class="mdi mdi-cart-plus"></i>
                                        </div>
                                        <div class="text-right">
                                            <p class="m-b-10 text-uppercase font-14 font-600">Total Pemesanan Pulsa</p>
                                            <h3 class="m-b-10">
                                            	<span>                                            	
                                            	Rp <?php echo number_format($data_pesanan_pulsa['total'],0,',','.'); ?> Dari <?php echo $count_pesanan_pulsa; ?> Pesanan	
                                            	</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card widget-box-three">
                                    <div class="card-body">
                                        <div class="bg-icon float-left">
                                            <i class="mdi mdi-cart-plus"></i>
                                        </div>
                                        <div class="text-right">
                                            <p class="m-b-10 text-uppercase font-14 font-600">Total Deposit</p>
                                            <h3 class="m-b-10">
                                            	<span>                                            	
                                            	Rp <?php echo number_format($data_deposit['total'],0,',','.'); ?> Dari <?php echo $count_deposit; ?> Deposit	
                                            	</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 "><i class="fa fa-area-chart fa-fw"></i> Grafik Pesanan 7 Hari Terakhir</h4>
                         <div id="line-chart" style="height: 300px;"></div>
<script type="text/javascript">
$(function(){
  new Morris.Area({
    element: 'line-chart',
    data: [
<?php
$list_tanggal = array();
for ($i = 6; $i > -1; $i--) {
    $list_tanggal[] = date('Y-m-d', strtotime('-'.$i.' days'));
}

for ($i = 0; $i < count($list_tanggal); $i++) {
    $get_order_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE date = '".$list_tanggal[$i]."' ");
    $get_order_pulsa = $conn->query("SELECT * FROM pembelian_pulsa WHERE date = '".$list_tanggal[$i]."' ");
    print("{ y: '".tanggal_indo($list_tanggal[$i])."', a: ".mysqli_num_rows($get_order_sosmed).", b: ".mysqli_num_rows($get_order_pulsa)." }, ");

}
?>
    ],
        xkey: 'y',
        ykeys: ['a','b'],
        labels: ['Pesanan Sosial Media','Pesanan Pulsa'],
        lineColors: ['#525af2','#58f252'],
        gridLineColor: '#000000',
        pointSize: 0,
        lineWidth: 0,
        resize: true,
        parseTime: false
    });
  });
</script>                          
                        </div>
                    </div>
                </div>
                </div>                                          
<?php
require '../lib/footer_admin.php';
?>