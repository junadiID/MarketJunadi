<?php
session_start();
require '../../config.php';
require '../../lib/session_user.php';
if (isset($_POST['id'])) {   
$get_id = $conn->real_escape_string($_POST['id']);
$cek_pesanan = $conn->query("SELECT * FROM tbl_sms WHERE id = '$get_id'");
while($data_pesanan = $cek_pesanan->fetch_assoc()) {
    if ($data_pesanan['place_from'] == "Website") {
        $icon = "close";
        $label = "danger";
    } else if ($data_pesanan['place_from'] == "API") {
        $icon = "check";
        $label = "success";
    }   
    if ($data_pesanan['refund'] == "0") {
        $icon2 = "close";
        $label2 = "danger"; 
    } else if ($data_pesanan['refund'] == "1") {
        $icon2 = "check";
        $label2 = "success";
    }
?>                                      
<div class="table-responsive">
<table class="table table-striped table-bordered table-box">
<tr>
<th class="table-detail" width="50%">ID</th>
<td class="table-detail"><?php echo $data_pesanan['oid']; ?></td>
</tr>
<tr>
<th class="table-detail">Isi SMS</th>
<td class="table-detail"><textarea type="text" class="form-control" readonly=""><?php echo $data_pesanan['isi_sms']; ?></textarea></td>
</tr>
<tr>
<th class="table-detail">Keterangan</th>
<td class="table-detail"><?php echo $data_pesanan['keterangan']; ?></td>
</tr>
<tr>
<th class="table-detail">Refund / Pengembalian Dana</th>
<td class="table-detail"><span class="badge badge-<?php echo $label2; ?>"><i class="mdi mdi-<?php echo $icon2; ?>"></i></span></td>
</tr>
<tr>
<th class="table-detail">Via API</th>
<td class="table-detail"><span class="badge badge-<?php echo $label; ?>"><i class="mdi mdi-<?php echo $icon; ?>"></i></span></td>
</tr>
</table>
</div>
<?php 
    }
}