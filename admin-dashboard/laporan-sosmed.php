<?php
session_start();
require '../config.php';
require '../lib/session_login_admin.php';

require '../lib/header_admin.php';
?> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 header-title"><b><i class="fa fa-book"></i>    Laporan Seluruh Pesanan Sosial Perbulan</b></h4>                             
                                        
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered nowrap m-0">
                                    <thead>
                                    <tr>
                                        <th>Total Pesanan</th>
                                        <th>Penghasilan Kotor</th>
                                        <th>Penghasilan Bersih</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr> 
                                        <td><?php echo $CountProfitSosmed; ?></td>
                                        <td>Rp <?php echo number_format($AllSosmed['total'],0,',','.') ?></td>   
                                        <td>Rp <?php echo number_format($ProfitSosmed['total'],0,',','.'); ?></td>                            
                                    </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 "><i class="fa fa-area-chart fa-fw"></i> Grafik Pesanan Sosial Media Bulan Ini</h4>
                         <div id="line-chart" style="height: 200px;"></div>
<script type="text/javascript">
$(function(){
  new Morris.Area({
    element: 'line-chart',
    data: [
<?php
$list_tanggal = array();
$tahun = date('Y'); //Mengambil tahun saat ini
$bulan = date('m'); //Mengambil bulan saat ini
$tanggal = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
for ($i=1; $i < $tanggal+1; $i++) {
   $list_tanggal[] = date('Y-m-'.$i.'');
}

for ($i = 0; $i < count($list_tanggal); $i++) {
    $get_order_sosmed = $conn->query("SELECT * FROM pembelian_sosmed WHERE date = '".$list_tanggal[$i]."' ");
    print("{ y: '".tanggal_indo($list_tanggal[$i])."', a: ".mysqli_num_rows($get_order_sosmed)." }, ");

}
?>
    ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Pesanan'],
        lineColors: ['#53c68c'],
        gridLineColor: '#eef0f2',
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
        </div>
<?php 
require '../lib/footer_admin.php';
?>