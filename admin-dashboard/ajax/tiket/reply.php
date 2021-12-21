<?php
session_start();
require '../../../config.php';
require '../../../lib/session_login_admin.php';
	if (!isset($_GET['id'])) {
		exit("Anda Tidak Memiliki Akses!");
	} 
	$GetIDTiket = $conn->real_escape_string($_GET['id']);
	$CallDBTiket = $conn->query("SELECT * FROM tiket WHERE id = '$GetIDTiket'");
	$ThisData = $CallDBTiket->fetch_assoc();
	if (mysqli_num_rows($CallDBTiket) == 0) {
		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Tiket Tidak Ditemukan');
		exit(header("Location: ".$config['web']['url']."admin-dashboard/tiket"));
	} else {
		$conn->query("UPDATE tiket SET this_admin = '1' WHERE id = '$GetIDTiket'");
		if (isset($_POST['balas'])) {
			$pesan = $conn->real_escape_string(trim(filter($_POST['pesan'])));
			if ($ThisData['status'] == "Closed") {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Tiket Di Tutup');
			} else if (!$pesan) {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Harap Mengisi Input Pada Form <br /> - Pesan');
			} else if (strlen($pesan) > 500) {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Maksimal Pengisian Pada Form Pesan Adalah 500 Karakter');
			} else {
				$update_terakhir = "$date $time";
				$insert_tiket = $conn->query("INSERT INTO pesan_tiket VALUES ('', '$GetIDTiket', 'Admin', '".$ThisData['user']."', '$pesan',  '$date', '$time','$update_terakhir')");
				$update_tiket = $conn->query("UPDATE tiket SET update_terakhir = '$update_terakhir', this_user = '0', status = 'Responded' WHERE id = '$GetIDTiket'");
				if ($insert_tiket == TRUE) {
					$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Sukses', 'pesan' => 'Pesan/Balasan Baru Berhasil Dikirim !!.');
				} else {
					$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'System Error');
				}
			}
		}
	}
require '../../../lib/header_admin.php';
?>

                        <!-- end row -->
				<div class="row">
					<div class="offset-md-2 col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title m-t-0 m-b-30"><i class="fa fa-envelope"></i> <?php echo $ThisData['subjek']; ?></h4>
										<div style="max-height: 400px; overflow: auto;">
											<div class="alert alert-info alert-white text-right">
												<b><?php echo $ThisData['user']; ?></b><br /><?php echo nl2br($ThisData['pesan']); ?><br /><i style="font-size: 10px;"><?php echo tanggal_indo($ThisData['date']); ?>, <?php echo $ThisData['time']; ?></i>
											</div>
<?php
$CekPesannya = $conn->query("SELECT * FROM pesan_tiket WHERE id_tiket = '$GetIDTiket'");
while ($IniPesannya = $CekPesannya->fetch_assoc()) {
	if ($IniPesannya['pengirim'] == "Admin") {
		$alert = "success";
		$text = "";
		$pengirim = "Admin";
	} else {
		$alert = "info";
		$text = "text-right";
		$pengirim = $IniPesannya['user'];
	}
?>
											<div class="alert alert-<?php echo $alert; ?> <?php echo $text; ?>">
												<b><?php echo $pengirim; ?></b><br /><?php echo nl2br($IniPesannya['pesan']); ?><br /><i style="font-size: 10px;"><?php echo tanggal_indo($IniPesannya['date']); ?>, <?php echo $IniPesannya['time']; ?></i>
											</div>
<?php
}
?>
										</div>
										<form class="form-horizontal" role="form" method="POST">
											<div class="form-group">
												<div class="col-md-12">
													<textarea name="pesan" class="form-control" placeholder="Message" rows="3"></textarea>
												</div>
											</div>
											<div class="card-footer text-muted">
											<a href="<?php echo $config['web']['url']; ?>admin-dashboard/tiket" class="btn btn-inverse"><i  class="mdi mdi-arrow-left-bold"></i> Kembali</a>
											<button type="submit" class="pull-right btn btn-success" name="balas"><i  class="fa fa-send"></i>	Balas</button>
											</div>
										</form>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="pull-right text-mute"><small>Ticketing System by penuliskode.net</small></div>
							</div>
						</div>
<?php require '../../../lib/footer_admin.php'; ?>