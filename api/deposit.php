<?php
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
			if ($aksinya == 'request') {
			    if (isset($_POST['provider']) && isset($_POST['pengirim']) && isset($_POST['jumlah'])) {
			        $post_provider = $conn->real_escape_string($_POST['provider']);
			        $post_pengirim = $conn->real_escape_string($_POST['pengirim']);
			        $post_jumlah = $conn->real_escape_string($_POST['jumlah']);
			        if (!$post_provider || !$post_pengirim || !$post_jumlah) {
			            $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			        } else if ($post_jumlah < 10000) {
			            $hasilnya = array('status' => false, 'data' => array('pesan' => 'Minimal Deposit Adalah 10000'));
			        } else {
			            $cek_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'DPEDIA'");
                		$data_provider = mysqli_fetch_assoc($cek_provider);
			            $cek_metod = $conn->query("SELECT * FROM metode_depo WHERE provider = '$post_provider'");
			            $data_metod = mysqli_fetch_assoc($cek_metod);
			            if (mysqli_num_rows($cek_metod) == 1) {
			                $kode = acak_nomor(3).acak_nomor(3);
			                
			                $postdata = "api_key=".$data_provider['key']."&nopengirim=085236276014&quantity=$post_jumlah&provider=".$data_metod['provider']."";
			                $ch = curl_init("https://serverh2h.com/order/deposit");
			                curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            $chresult = curl_exec($ch);
                            curl_close($ch);
                            $json_result = json_decode($chresult, true);
                            
                            if ($json_result['error'] == true) {
                                $hasilnya = array('status' => false, 'data' => array('pesan' => $json_result['error']));
                            } else {
                                if ($post_provider == "TSEL" || $post_provider == "XL") {
                                    $tipenya = "PULSA";
                                } else {
                                    $tipenya = "BANK";
                                }
                                
                                $pesan = $json_result['pesan'];
                        	    $tujuan = $json_result['tujuan'];
                        	    $jumlah_tf = $json_result['jumlah_tf'];
                        	    $provider_oid = $json_result['code'];
                        	    $amount = $json_result['amount'];
                        	    $metodnya = $data_metod['nama'];
                    	        $get_saldo = $post_jumlah * $data_metod['rate'];
                    	        
                    	        $insert = $conn->query("INSERT INTO deposit VALUES ('','$provider_oid', '".$datanya['username']."', '$tipenya', '".$data_metod['provider']."' ,'$metodnya', '-','$tujuan','$jumlah_tf', '$amount', 'Pending', 'API', '$date', '$time')");
                    	        if ($insert == true) {
                    	            $hasilnya = array('status' => true, 'data' => array(
                    	                    'pesan' => $pesan,
                    	                    'code' => $provider_oid,
                    	                    'jumlah_tf' => $jumlah_tf,
                    	                    'amount' => $amount,
                    	                    'provider' => $data_metod['provider'],
                    	                    'tujuan' => $tujuan
                    	                )
                    	            );
                    	        } else {
                    	            $hasilnya = array('status' => false, 'data' => array('pesan' => 'Gagal Membuat Deposit'));
                    	        }
                            }
			            } else {
			                $hasilnya = array('status' => false, 'data' => array('pesan' => 'Provider Tidak Ditemukan'));
			            }
			        }
			    } else {
			        $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			    }
			} else if ($aksinya == 'konfirmasi') {
			    if (isset($_POST['provider']) || isset($_POST['code'])) {
			        $post_provider = $conn->real_escape_string($_POST['provider']);
			        $post_code = $conn->real_escape_string($_POST['code']);
			        if (!$post_provider || !$post_code) {
			            $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			        } else {
			            $cek_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'DPEDIA'");
                    	$data_provider = mysqli_fetch_assoc($cek_provider);
			            $cek_depo = $conn->query("SELECT * FROM deposit WHERE username = '".$datanya['username']."' AND status = 'Pending' AND kode_deposit = '$post_code'");
			            $data_depo = $cek_depo->fetch_assoc();
			            if (mysqli_num_rows($cek_depo) == 1) {
			                $get_id = $data_depo['kode_deposit'];
                    		$saldo = $data_depo['get_saldo'];
                    		$username = $data_depo['username'];
                        	if ($data_depo['status'] == "Pending") {
                                $message = "Menunggu Pembayaran";
                            } else if ($data_depo['status'] == "Error") {
                                $message = "Permintaan Telah Di batalkan";
                            } else if ($data_depo['status'] == "Success") {
                                $message = "Pembayaran Sudah Berhasil";
                            }
                            
                            $postdata = "api_key=".$data_provider['key']."&code=$post_code&provider=$post_provider";
				            $ch = curl_init("https://serverh2h.com/status/deposit");
                    		curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    		$chresult = curl_exec($ch);
                    		curl_close($ch);
                    		$json_result = json_decode($chresult, true);
                    		
                    		if ($json_result['error'] == true) {
                    			$hasilnya = array('status' => false, 'data' => array('pesan' => $json_result['error']));
                    		} else {
                    			$status = $json_result['status'];
                    			if ($conn->query("UPDATE deposit SET status = '$status'  WHERE kode_deposit = '$post_code'") == true) {
                    			    $conn->query("UPDATE users set saldo = saldo + $saldo WHERE username = '$username'");
                                    $conn->query("INSERT INTO history_saldo VALUES ('', '$username', 'Penambahan Saldo', '$saldo', 'Penambahan Saldo Dengan Deposit ID $get_id', '$date', '$time')");
                                    $hasilnya = array('status' => true, 'data' => array(
                                            'status' => $status,
                    			            'pesan' => $message,
                    			            'jumlah' => $data_depo['jumlah_transfer'],
                    			            'amount' => $data_depo['get_saldo'],
                    			            'provider' => $data_depo['provider']
                    			        )
                    			    );
                    			} else {
                    			    $hasilnya = array('status' => false, 'data' => array('pesan' => 'System Error'));
                    			}
                    		}
			            } else {
			                $hasilnya = array('status' => false, 'data' => array('pesan' => 'Data Deposit Tidak Ditemukan'));
			            }
			        }
			    } else {
			        $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			    }
			} else if ($aksinya == 'cancel') {
			    if (isset($_POST['provider']) || isset($_POST['code'])) {
			        $post_provider = $conn->real_escape_string($_POST['provider']);
			        $post_code = $conn->real_escape_string($_POST['code']);
			        if (!$post_provider || !$post_code) {
			            $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			        } else {
			            $cek_provider = $conn->query("SELECT * FROM provider_pulsa WHERE code = 'DPEDIA'");
                    	$data_provider = mysqli_fetch_assoc($cek_provider);
			            $cek_depo = $conn->query("SELECT * FROM deposit WHERE username = '".$datanya['username']."' AND status = 'Pending' AND kode_deposit = '$post_code'");
			            $data_depo = $cek_depo->fetch_assoc();
			            if (mysqli_num_rows($cek_depo) == 1) {
			                $get_id = $data_depo['kode_deposit'];
                            
			                $postdata = "api_key=".$data_provider['key']."&code=$post_code&provider=$post_provider";
				            $ch = curl_init("https://serverh2h.com/status/deposit_cancel");
                    		curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    		$chresult = curl_exec($ch);
                    		curl_close($ch);
                    		$json_result = json_decode($chresult, true);
                    		
                    		if ($json_result['error'] == true) {
                    			$hasilnya = array('status' => false, 'data' => array('pesan' => $json_result['error']));
                    		} else {
                    		    if ($conn->query("UPDATE deposit SET status = 'Error'  WHERE kode_deposit = '$get_id'") == true) {
                    		        $hasilnya = array('status' => true, 'data' => array('pesan' => 'Deposit Berhasil Dibatalkan'));
                    		    } else {
                    		        $hasilnya = array('status' => false, 'data' => array('pesan' => 'System Error'));
                    		    }
                    		}
			            } else {
			                $hasilnya = array('status' => false, 'data' => array('pesan' => 'Data Deposit Tidak Ditemukan'));
			            }
			        }
			    } else {
			        $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			    }
			} else {
			    $hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
			}
		} else {
			$hasilnya = array('status' => false, 'data' => array('pesan' => 'Api Key Salah'));
		}
	}
} else {
	$hasilnya = array('status' => false, 'data' => array('pesan' => 'Permintaan Tidak Sesuai'));
}

print(json_encode($hasilnya, JSON_PRETTY_PRINT));