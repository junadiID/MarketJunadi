<?php
/**
 * KangHL
 * Domain: https://kanghl.web.id/
 */
require '../config.php';
header('Content-Type: application/json');
if ($maintenance == 1) {
	$hasilnya = array('status' => false, 'data' => array('pesan' => 'Maintenance'));
	exit(json_encode($hasilnya, JSON_PRETTY_PRINT));
}
if (isset($_POST['api_key']) AND isset($_POST['action'])) {
	$apinya = $conn->real_escape_string($_POST['api_key']);
	$aksinya = $_POST['action'];

	if (!$apinya || !$aksinya) {
		$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));

	} else {
		$cek_usernya = $conn->query("SELECT * FROM users WHERE api_key = '$apinya'");
		$datanya = $cek_usernya->fetch_assoc();
		if (mysqli_num_rows($cek_usernya) == 1) {
			if ($aksinya == 'pemesanan') {
				if (isset($_POST['layanan']) AND isset($_POST['target'])) {
					$layanan = $conn->real_escape_string(trim(filter($_POST['layanan'])));
					$target = $conn->real_escape_string(trim(filter($_POST['target'])));
					
					if (!$layanan || !$target) {
						$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
					} else {
						$cek_layanan = $conn->query("SELECT * FROM layanan_pulsa WHERE provider_id = '$layanan' AND status = 'Normal'");
						$data_layanan = $cek_layanan->fetch_assoc();
						if (mysqli_num_rows($cek_layanan) == 0) {
							$hasilnya = array('status' => false, 'data' => array('pesan' =>'Layanan tidak tersedia'));
						} else {
							$order_id = acak_nomor(3).acak_nomor(4);
							$provider = $data_layanan['provider'];
							 if ($datanya['saldo'] < $data_layanan['harga_api']) {
								$hasilnya = array('status' => false, 'data' => array('pesan' =>'Saldo Tidak Mencukupi'));
							} else {
							$cek_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = '$provider'");
		$data_provider = mysqli_fetch_assoc($cek_provider);

                                if ($provider == "DPEDIA") {
	    $postdata = array ('api_key' => $data_provider['key'],
	                       'service' => $layanan,
	                       'phone' => $target);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://serverh2h.com/order/pulsa");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          $chresult = curl_exec($ch);
            //var_dump($chresult);
            curl_close($ch);
            $json_result = json_decode($chresult, true);
             }
	    if ($provider = 'DPEDIA' AND $json_result['error'] == TRUE) {
	   $hasilnya = array('status' => false, 'data' => array('pesan' => 'Gagal Silahkan Hubungi Admin'));
	    } else {
	    if ($provider == "DPEDIA") {
	    $provider_oid = $json_result['code_trx'];
	    }
									if ($conn->query("INSERT INTO pembelian_pulsa VALUES ('','$order_id', '$provider_oid', '".$datanya['username']."', '".$data_layanan['layanan']."', '".$data_layanan['harga_api']."', '100', '$target', '$nomor_meteran', '-', 'Pending', '$date', '$time', 'API', '$provider', '0')") == true) {
					
										$conn->query("UPDATE users SET saldo = saldo-".$data_layanan['harga_api'].", pemakaian_saldo = pemakaian_saldo+".$data_layanan['harga_api']." WHERE username = '".$datanya['username']."'");
										$conn->query("INSERT INTO history_saldo VALUES ('', '".$datanya['username']."', 'Pengurangan Saldo', '".$data_layanan['harga_api']."', 'Pemesanan Pulsa Via API Dengan Order ID $order_id', '$date', '$time')");
										$hasilnya = array('status' => true, 'data' => array('id' => $order_id));
										} else {
										$hasilnya = array('status' => false, 'data' => array('pesan' => 'System Error'));
									}
								}
							}
						}
					}
				} else {
					$hasilnya = array('status' => false, 'data' => array('pesan' => 'System Error'));
					}
			} else if ($aksinya == 'status') {
				if (isset($_POST['id'])) {
					$order_id = $conn->real_escape_string(trim($_POST['id']));
					$cek_pesanan = $conn->query("SELECT * FROM pembelian_pulsa WHERE oid = '$order_id' AND user = '".$datanya['username']."'");
					$data_pesanan = mysqli_fetch_array($cek_pesanan);
					if (mysqli_num_rows($cek_pesanan) == 0) {
						$hasilnya = array('status' => false, 'data' => array('pesan' => 'Order ID Tidak Di Temukan'));
					} else {
						$hasilnya = array('status' => true, 'data' => array("id" => $data_pesanan['oid'], 'status' => $data_pesanan['status'], 'catatan' => $data_pesanan['keterangan']));
					}
				} else {
					$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
				}
			} else if ($aksinya == 'layanan') {
					$cek_layanan = $conn->query("SELECT * FROM layanan_pulsa ORDER BY service_id ASC");
					while($rows = mysqli_fetch_array($cek_layanan)){
					$hasilnya = "-";
					$this_data[] = array('sid' => $rows['provider_id'], 'operator' => $rows['operator'], 'layanan' => $rows['layanan'], 'harga' => $rows['harga_api'],'status' => $rows['status'],'tipe' => $rows['tipe']);
                }
						$hasilnya = array('status' => true, 'data' => $this_data);
			} else {
				$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Salah'));
			}
		} else {
			$hasilnya = array('status' => false, 'data' => array('pesan' => 'Api Key Salah'));
		}
	}
} else {
	$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
}
                  

print(json_encode($hasilnya, JSON_PRETTY_PRINT));