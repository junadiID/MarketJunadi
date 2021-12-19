<?php 
session_start();
require '../config.php';
require '../lib/session_login.php';
require '../lib/session_user.php';

if (isset($_POST['ganti_pass'])) {
	$password = $conn->real_escape_string(trim($_POST['password_lama']));
	$password_baru = $conn->real_escape_string(trim($_POST['password_baru']));
	$konfirmasi_baru = $conn->real_escape_string(trim($_POST['konf_pass_baru']));

	$cek_passwordnya = password_verify($password, $data_user['password']);
	$hash_passwordnya = password_hash($password_baru, PASSWORD_DEFAULT);
	if (!$password || !$password_baru || !$konfirmasi_baru) {
        	$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Harap Mengisi Input Pada Form <br /> - Password <br /> - Password Baru <br /> - Konfirmasi Password Baru');
    } else if ($cek_passwordnya == false) {
    		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Password Lama Yang Anda Masukkan Tidak Sesuai');
    } else if (strlen($password_baru) < 4 ){
    		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Password Baru Minimal 4 Karakter');
    } else if ($password_baru <> $konfirmasi_baru){
    		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Konfirmasi Password Baru Tidak Sesuai');
   	} else {

   		if ($conn->query("UPDATE users SET password = '$hash_passwordnya' WHERE username = '$sess_username'") == true) {
   			$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Password Baru Berhasil Di Ubah');
   	} else { 
   			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Gagal !');
   		}
	}
} else if (isset($_POST['setting_nama'])) {
	$password = $conn->real_escape_string(trim($_POST['password']));
	$nama_baru = $conn->real_escape_string(trim(filter($_POST['nama'])));

	$cek_passwordnya = password_verify($password, $data_user['password']);
	if (!$password || !$nama_baru) {
        	$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Harap Mengisi Input Pada Form <br /> - Nama <br /> - Password');
    } else if ($cek_passwordnya == false) {
    		$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Password Yang Anda Masukkan Tidak Sesuai');
   	} else {

   		if ($conn->query("UPDATE users SET nama = '$nama_baru', update_nama = '0' WHERE username = '$sess_username'") == true) {
   			$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Nama Berhasil Diubah');
   	} else { 
   			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Gagal !');
   		}
	}
} else if (isset($_POST['ganti_apinya'])) {
		$api_barunya = acak(32);
   		if ($conn->query("UPDATE users SET api_key = '$api_barunya' WHERE username = '$sess_username'") == true) {
   			$_SESSION['hasil'] = array('alert' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Api Key Berhasil Diubah');
   	} else { 
   			$_SESSION['hasil'] = array('alert' => 'danger', 'judul' => 'Gagal', 'pesan' => 'Gagal !');
   		}
	}	
require '../lib/header.php';
?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-heading">
                                
                            </div>
                            <div class="card-body">
								<center><img src="<?php echo $config['web']['url'] ?>assets/images/20191015_002653.png" alt="user-img" class="card-img-top"></img></center>    
									<div class="caption p-2">
                                        <center><h4><?php echo $data_user['nama']; ?></h4></center>
                                  	</div>      
                                    <div class="caption p-2"> 
                                    		<p>
                                    		    <b>Nama : </b><?php echo $data_user['nama']; ?><br />
                                           	    <b>Username : </b><?php echo $sess_username; ?><br />
                                           	    <b>Email : </b><?php echo $data_user['email']; ?><br />
                                           	    <b>Level : </b><?php echo $data_user['level']; ?><br />
                                           	    </p>
                                           	    
                                    </div>                                  	
                            </div>
                        </div>
                    </div>                                         
                                       
                    <div class="col-lg-8">
                        <div class="card">
                        
                            <div class="card-body">                            
                                <h4 class="header-title m-t-0 m-b-30"><i class="mdi mdi-account-settings-variant text-primary"></i> Pengaturan Akun</h4>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-account-key"></i></span>
                                            <span class="d-none d-sm-block">Ganti Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nama-tab" data-toggle="tab" href="#nama" role="tab" aria-controls="nama" aria-selected="true">        
                                            <span class="d-block d-sm-none"><i class="fa fa-user"></i></span>
                                            <span class="d-none d-sm-block">Ganti Nama</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="api-tab" data-toggle="tab" href="#api" role="tab" aria-controls="api" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-shuffle-variant"></i></span>
                                            <span class="d-none d-sm-block">Ganti Api Key</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="api-doc-tab" data-toggle="tab" href="#api_doc" role="tab" aria-controls="api_doc" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-account-network"></i></span>
                                            <span class="d-none d-sm-block">API Dokumentasi Profile</span>
                                        </a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <form class="form-horizontal" method="POST">
                                	<input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Password Lama</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password_lama" placeholder="Password Lama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password_baru" placeholder="Password Baru">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Konfirmasi Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="konf_pass_baru" placeholder="Konfirmasi Password Baru">
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <!--<div class="offset-sm-3 col-sm-9">-->
                                        <!--    <button type="submit" name="ganti_pass" class="btn btn-block btn-primary waves-effect waves-light"><i class="mdi mdi-check-all"></i>	Ganti Password</button>-->
                                        <!--    <button type="refresh" class="btn btn-block btn-danger waves-effect waves-light"><i class="fa fa-refresh"></i> Ulangi</button>-->
                                        <!--</div>-->
                                    </div>
                                </form>
                                    </div>
                                    <div class="tab-pane" id="nama" role="nama" aria-labelledby="nama-tab">
                                <form class="form-horizontal" method="POST">
                                	<input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                	<?php
                                	$CallUsers = $conn->query("SELECT * FROM users WHERE username = '$sess_username'");
                                	while ($DataUsers = $CallUsers->fetch_assoc()) {
                                	 if ($DataUsers['update_nama'] == "1") {
                                		$cek = ''; 
                                        $disabled = '';
                                	} else if ($DataUsers['update_nama'] == "0") {
                                		$cek = ''; 
                                        $disabled = '';
                                	}
                                	?>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama" value="<?php echo $DataUsers['nama'] ?>" <?php echo $cek; ?>>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Password Anda</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" <?php echo $cek; ?>>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" name="setting_nama" class="btn btn-block btn-primary waves-effect waves-light" <?php echo $disabled; ?>><i class="mdi mdi-check-all"></i>	Ganti Nama</button>
                                            <button type="refresh" class="btn btn-block btn-danger waves-effect waves-light" ><i class="fa fa-refresh"></i> Ulangi</button>
                                        </div>
                                    </div>
                                <?php } ?>                                    
                                </form>
                                </div>
                                <div class="tab-pane" id="api" role="api" aria-labelledby="api-tab">
                                	<form class="form-horizontal" method="POST">
                                	<input type="hidden" name="csrf_token" value="<?php echo $config['csrf_token'] ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Api Key Anda</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="api" value="<?php echo $data_user['api_key']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" name="ganti_apinya" class="btn btn-block btn-primary waves-effect waves-light"><i class="mdi mdi-shuffle-variant"></i>	Update</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                                <div class="tab-pane" id="api_doc" role="api_doc" aria-labelledby="api-doc-tab">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Parameter</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>URL</td>
                                                    <td><?php echo $config['web']['url']; ?>api/profile</td>
                                                </tr>
                                                <tr>
                                                    <td>api_key</td>
                                                    <td><input type="text" class="form-control" name="nama" value="<?php echo $data_user['api_key']; ?>" readonly></td>
                                                </tr>
                                                <tr>
                                                    <td>action</td>
                                                    <td>profile</td>
                                                </tr>
                                                <tr>
                                                    <td>Contoh Kode PHP</td>
                                                    <td><a href="<?php echo $config['web']['url']; ?>halaman/api-profile.txt" target="blank">Contoh</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
<b>Contoh Respons Yang Di Dapat</b><br />
<div class="alert alert-info-2">
<pre>
Jika Request Sukses

{
  "data": {
          "username": "davva.wa",
          "sisa_saldo": "20.200"
          }
}

Jika Request Gagal

{
    "status": false,
    "data": {
        "pesan": "Permintaan Tidak Sesuai"
    }
}
</pre>
</div>
                                      </div>
                                   </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-danger">
                                        <i class="ri-shopping-cart-line font-24 avatar-title text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h4 class="text-dark mt-1"><span><?php echo $jumlah_order_sosmed+$jumlah_order_pulsa; ?></span></h4>
                                        <p class="text-muted mb-1 text-truncate">Jumlah Orderan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-warning">
                                        <i class="ri-shopping-cart-line font-24 avatar-title text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h4 class="text-dark mt-1"><span>Rp <?php echo number_format($data_user['pemakaian_saldo'],0,',','.'); ?></span></h4>
                                        <p class="text-muted mb-1 text-truncate">Pemakaian Saldo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-success">
                                        <i class="ti-wallet font-24 avatar-title text-success"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h4 class="text-dark mt-1"><span><?php echo $jumlah_deposit_user; ?></span></h4>
                                        <p class="text-muted mb-1 text-truncate">Jumlah Deposit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-primary">
                                        <i class="ti-wallet font-24 avatar-title text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <h4 class="text-dark mt-1"><span>Rp <?php echo number_format($data_user['saldo'],0,',','.'); ?></span></h4>
                                        <p class="text-muted mb-1 text-truncate">Sisa Saldo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div> <!-- end col -->                   
              </div>                
<?php
require '../lib/footer.php';
?>
