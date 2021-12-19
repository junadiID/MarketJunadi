<?php
session_start();
require 'config.php';
require 'lib/session_user.php';
require 'lib/session_login.php';

$cek_depo = $conn->query("SELECT * FROM deposit WHERE username = '$sess_username' AND status = 'Pending'");
		$data_depo = $cek_depo->fetch_assoc();
		$depo = $cek_depo->num_rows;
		
		$get_id = $data_depo['kode_deposit'];
		$saldo = $data_depo['get_saldo'];
		$username = $data_depo['username'];
		
		$cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'MAUPEDIA'");
		$data_provider = mysqli_fetch_assoc($cek_provider);
		
    	if ($depo == 0) {  
    	$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Data Tidak Ditemukan', 'pesan' => 'Tidak Menemukan Deposit.');
		  exit(header("Location: ".$config['web']['url']));
	} else {
		
		
if ($data_depo['status'] == "Pending") {
        $label = "warning";
    } else if ($data_depo['status'] == "Error") {
        $label = "danger";     
    } else if ($data_depo['status'] == "Success") {
        $label = "success";    
    }
if ($data_depo['status'] == "Pending") {
        $message = "Menunggu Pembayaran";
    } else if ($data_depo['status'] == "Error") {
        $message = "Permintaan Telah Di batalkan";
    } else if ($data_depo['status'] == "Success") {
        $message = "Pembayaran Sudah Berhasil";
    }	
    
    	if (isset($_POST['konfirm'])) {
    	    
	        $postdata = "api_key=".$data_provider['api_key']."&action=konfirmasi&provider=".$data_depo['provider']."&code=".$data_depo['kode_deposit']."";
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/deposit");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$chresult = curl_exec($ch);
			curl_close($ch);
			$json_result = json_decode($chresult, true);
		    
		    $status = $json_result['data']['status'];
			
			if ($json_result['status'] == false) {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Data Tidak Ditemukan', 'pesan' => $json_result['data']['pesan']);
			} else {
			if ($conn->query("UPDATE deposit SET status = '$status'  WHERE kode_deposit = '$get_id'") == true){
                   
                    $conn->query("UPDATE users SET saldo = saldo + $saldo WHERE username = '$username'");
                    $conn->query("INSERT INTO history_saldo VALUES ('', '$username', 'Penambahan Saldo', '$saldo', 'Penambahan Saldo Dengan Deposit ID $get_id', '$date', '$time')");

			$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Deposit Berhasil', 'pesan' => 'Konfirmasi Deposit Berhasil! saldo Anda Telah Kami Tambah');
			exit(header("location: ".$config['web']['url']));
			}
	}

		} else if (isset($_POST['cancel'])) {
		    
		$postdata = "api_key=".$data_provider['api_key']."&action=cancel&provider=".$data_depo['provider']."&code=".$data_depo['kode_deposit']."";
            
            $ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/deposit");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$chresult = curl_exec($ch);
			curl_close($ch);
			$json_result = json_decode($chresult, true);
		
			
			if ($json_result['status'] == false) {
				$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Data Tidak Ditemukan', 'pesan' => $json_result['data']['pesan']);
			} else {
		        if ($conn->query("UPDATE deposit SET status = 'Error'  WHERE kode_deposit = '$get_id'") == true){
                   
			$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Deposit Berhasil Dibatalkan', 'pesan' => 'Deposit Anda Telah Kami Batalkan');
			exit(header("location: ".$config['web']['url']));
			}
		}
	}
   }
	
			
require 'lib/header.php';
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-left">
                                        <img src="/assets/images/logo.png" alt="" height="50">
                                    </div>
                                    <div class="float-right">
                                        <h4 class="m-0">Invoice #<?php echo $data_depo['kode_deposit']; ?></h4>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="float-left mt-3">
                                            <p><b>Hello, <?php echo $sess_username; ?></b></p>
                                            <p class="text-muted">Terimakasih telah melakukan deposit di <?php echo $data['short_title']; ?>, Silahkan lakukan pembayaran dengan detail faktur pembayaran di bawah ini. </p>
                                        </div>

                                    </div><!-- end col -->
                                    <div class="col-md-6">
                                        <div class="mt-3 text-md-right">
                                         <p><strong>Deposit Date: </strong> <?php echo $data_depo['date']; ?></p>
                                            <p><strong>Deposit Status: </strong> <span class="badge bg-<?php echo $label; ?>"><?php echo $message; ?></span></p>
                                            <p><strong>Deposit ID: </strong> #<?php echo $data_depo['kode_deposit']; ?></p>
                                           </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-centered mt-3">
                                                <thead>
                                                    <th>#</th>
                                        <th>Metode</th>
                                        <th>Tujuan</th>
                                        <th>Jumlah transfer</th>
                                        <th class="text-right">Saldo</th>
                                                </tr></thead>
                                                <tbody>
                                                  <tr>
                                        <td>1</td>
                                        <td><?php echo $data_depo['payment']; ?></td>
                                        <td><font color='#fa0a0a'><?php echo $data_depo['tujuan']; ?></font></td>
                                        <td class="text-rigth">Rp <?php echo number_format($data_depo['jumlah_transfer'],0,',','.'); ?></td>
                                        <td class="text-rigth">Rp <?php echo number_format($data_depo['get_saldo'],0,',','.'); ?></td>
                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="clearfix pt-3">
                                         <h5 class="text-muted">Notes:</h5>
                                         <p class="text-muted">Harap melakukan pembayaran segera selambat-lambatnya 12 jam dari faktur deposit di buat.</p>
                                         <p class="text-muted">Mohon transfer dengan jumlah Rp <font color='#fa0a0a'><?php echo number_format($data_depo['jumlah_transfer'],0,',','.'); ?></font>
tidak boleh kurang atau lebih agar bisa terbaca oleh <font color='#fa0a0a'>System</font>.</p>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="float-right pt-3">
                                            <p><b>Sub-total:</b> Rp <?php echo number_format($data_depo['jumlah_transfer'],0,',','.'); ?></p>
                                            <h2>Rp <?php echo number_format($data_depo['jumlah_transfer'],0,',','.'); ?></h2><hr>
                                            
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                                
                                <div class="d-print-none m-t-30 m-b-30">
                                   <div class="text-right">
                                        <form method="POST">
                            <input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                   <button class="btn btn-success" name="konfirm"> KONFIRMASI </button>
                                    <button class="btn btn-danger" name="cancel"> BATALKAN </button>
                                 </form>
                                 </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

<?php
require 'lib/footer.php';
?>           