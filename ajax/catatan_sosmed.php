<?php
require("../config.php");

if (isset($_POST['layanan'])) {
	$post_layanan = $conn->real_escape_string($_POST['layanan']);
	$cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE service_id = '$post_layanan' AND status = 'Aktif'");
	if (mysqli_num_rows($cek_layanan) == 1) {
		$data_layanan = mysqli_fetch_assoc($cek_layanan);
	?>
												<div class="alert alert-info alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<i class="mdi mdi-information"></i>
													<b>Keterangan:</b> <?php echo $data_layanan['catatan']; ?><br />
<br>													<b>Price/1000:</b> Rp <?php echo number_format($data_layanan['harga'],0,',','.'); ?><br />
													<b>Min. Order:</b> <?php echo number_format($data_layanan['min'],0,',','.'); ?><br />
													<b>Max. Order:</b> <?php echo number_format($data_layanan['max'],0,',','.'); ?>
												</div>
	<?php
	} else {
	?>
												<div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<i class="mdi mdi-block-helper"></i>
													<b>Gagal :</b> Service Tidak Ditemukan
												</div>
	<?php
	}
} else {
?>
												<div class="alert alert-icon alert-danger alert-dismissible fade in" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
													<i class="mdi mdi-block-helper"></i>
													<b>Gagal : </b> Terjadi Kesalahan.
												</div>
<?php
}