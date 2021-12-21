<?php
session_start();
require("../config.php");
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	if (!isset($_POST['operator'])) {
		exit("Not Access!");
	}
if (isset($_POST['operator'])) {
	$post_operator = $conn->real_escape_string($_POST['operator']);
	$cek_layanan = $conn->query("SELECT * FROM layanan_pulsa WHERE operator = '$post_operator' AND status = 'Normal' ORDER BY harga ASC");
	?>
	<option value="0">Pilih Salah Satu</option>
	<?php
	while ($data_layanan = $cek_layanan->fetch_assoc()) {
	?>
	<option value="<?php echo $data_layanan['provider_id'];?>"><?php echo $data_layanan['layanan'];?></option>
	<?php
	}
} else {
?>
<option value="0">Error.</option>
<?php
}
} else {
	exit("Not Access!");
}