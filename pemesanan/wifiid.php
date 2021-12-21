<?php
session_start();
require '../config.php';
require '../lib/session_user.php';
	if (isset($_POST['pesan'])) {
	require '../lib/session_login.php';
		$post_operator = $conn->real_escape_string(trim(filter($_POST['operator'])));
		$post_layanan = $conn->real_escape_string(trim(filter($_POST['layanan'])));
		$post_target = $conn->real_escape_string(trim(filter($_POST['target'])));
		$post_nometer = $conn->real_escape_string(trim(filter($_POST['nometer'])));

		$cek_layanan = $conn->query("SELECT * FROM layanan_pulsa WHERE provider_id = '$post_layanan' AND status = 'Normal'");
		$data_layanan = mysqli_fetch_assoc($cek_layanan);
		
		$order_id = acak_nomor(3).acak_nomor(4);
		$provider = $data_layanan['provider'];

		$cek_provider = $conn->query("SELECT * FROM provider WHERE code = '$provider'");
		$data_provider = mysqli_fetch_assoc($cek_provider);

		if (!$post_target || !$post_layanan || !$post_operator) {
			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => 'Harap Mengisi Input Pada Form <br /> - Operator <br /> - Layanan <br /> - Target');
		} else if (mysqli_num_rows($cek_layanan) == 0) {
			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => 'Layanan Tidak Tersedia.');
		} else if (mysqli_num_rows($cek_provider) == 0) {
			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => 'Server Sedang Maintance.');
		} else if ($data_user['saldo'] < $data_layanan['harga']) {
			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => 'Saldo Anda Tidak Mencukupi Untuk Melakukan Pemesanan Ini.');
			
		} else {

            if ($provider == "MAUPEDIA") {
	    $postdata = "api_key=".$data_provider['api_key']."&action=pemesanan&layanan=$post_layanan&target=$post_target";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://maupedia.com/api/pulsa");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $chresult = curl_exec($ch);
            curl_close($ch);
            $json_result = json_decode($chresult, true);
            
            
            if ($provider = 'MAUPEDIA' AND $json_result['status'] == false) {
                $_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => ''.$json_result['data']['pesan']);
            } else {
            if ($provider == "MAUPEDIA") {
                $provider_oid = $json_result['data']['code_trx'];
            }
            
				if ($conn->query("INSERT INTO pembelian_pulsa VALUES ('','$order_id', '$provider_oid', '$sess_username', '".$data_layanan['layanan']."', '".$data_layanan['harga']."', '".$data_layanan['profit']."', '$post_target', '$post_nometer', '$pesan', 'Pending', '$date', '$time', 'Website', '$provider', '0')") == true) {
					
					$conn->query("UPDATE users SET saldo = saldo-".$data_layanan['harga'].", pemakaian_saldo = pemakaian_saldo+".$data_layanan['harga']." WHERE username = '$sess_username'");
					$conn->query("INSERT INTO history_saldo VALUES ('', '$sess_username', 'Pengurangan Saldo', '".$data_layanan['harga']."', 'Pemesanan Pulsa Dengan Order ID $order_id', '$date', '$time')");

    				$harga = number_format($data_layanan['harga'],0,',','.');
    				$_SESSION['hasil'] = array(
    				 'alert' => 'success',
    				 'judul' => 'Pesanan Berhasil.', 
    				 'pesan' => '<br/> 
    				 <b>Order ID : </b> '.$order_id.'<br />
    				 <b>Layanan : </b> '.$data_layanan['layanan'].'<br />
    				 <b>Target : </b> '.$post_target.'<br />
    				 <b>Total Harga : </b> Rp '.$harga.'');
					} else {
						$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Pemesanan Gagal', 'pesan' => 'Gagal');
					}
			}
		}
	}
}
	require("../lib/header.php");
?>
			<div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 text-uppercase text-center header-title"><i class="mdi mdi-spotify mr1 text-primary"></i> PESANAN BARU</h4><hr>
                                	<form class="form-horizontal" method="POST">
	                              	<input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">   										    
											<div class="form-group">
												<label class="col-md-2 control-label">Operator</label>
												<div class="col-md-10">
													<select class="form-control" name="operator" id="operator">
													<option value="0">Pilih Salah Satu</option>
												<?php
												$cek_kategori = $conn->query("SELECT * FROM kategori_layanan WHERE kode IN ('WIFI ID') ORDER BY nama ASC");
												while ($data_kategori = $cek_kategori->fetch_assoc()) {
												?>
													<option value="<?php echo $data_kategori['kode']; ?>"><?php echo $data_kategori['nama']; ?></option>
												<?php } ?>														
								                               </select>
												</div>
											</div>											
											<div class="form-group">
												<label class="col-md-2 control-label">Layanan</label>
												<div class="col-md-10">
													<select class="form-control" name="layanan" id="layanan">
														<option value="0">Pilih Operator Terlebih Dahulu</option>
													</select>
												</div>
											</div>
											<div id="keterangan"></div>
											<div class="form-group">
												<label class="col-md-2 control-label">Nama Pelanggan</label>
												<div class="col-md-10">
													<input type="text" name="target" class="form-control" placeholder="Masukkan Nama Akun">
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Harga</label>
												<div class="col-md-10">
													<input type="text" class="form-control" id="harga" readonly>
												</div>
											</div>
											<div class="col-md-12">
                                    <button type="submit" class="pull-right btn btn-block btn--md btn-primary waves-effect w-md waves-light" name="pesan" onclick="return countClicks();"><i class="mdi mdi-cart"></i>	Buat Pesanan</button>

											</div>
											</div>
										</form>
									</div>
									
								</div>
							</div>								
                    
                    
<script type="text/javascript">
$(document).ready(function() {
	$("#operator").change(function() {
		var operator = $("#operator").val();
		$.ajax({
			url: '<?php echo $config['web']['url']; ?>ajax/layanan_pulsa.php',
			data: 'operator=' + operator,
			type: 'POST',
			dataType: 'html',
			success: function(msg) {
				$("#layanan").html(msg);
			}
		});
	});
	$("#layanan").change(function() {
		var layanan = $("#layanan").val();
		$.ajax({
			url: '<?php echo $config['web']['url']; ?>ajax/harga_pulsa.php',
			data: 'layanan=' + layanan,
			type: 'POST',
			dataType: 'html',
			success: function(msg) {
				$("#harga").val(msg);
			}
		});
	});
	$("#layanan").change(function() {
		var layanan = $("#layanan").val();
		$.ajax({
			url: '<?php echo $config['web']['url']; ?>ajax/catatan_keterangan.php',
			data: 'layanan=' + layanan,
			type: 'POST',
			dataType: 'html',
			success: function(msg) {
				$("#keterangan").html(msg);
			}
		});
	});
});

var ClickCount = 0;
function countClicks() {
	var clickLimit = 1; //Max number of clicks
	if(ClickCount>=clickLimit) {
		return false;
	}
	else
	{
		ClickCount++;
		return true;
	}
}

	</script>				
<?php
	require ("../lib/footer.php");
?>