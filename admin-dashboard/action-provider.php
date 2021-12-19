<?php
session_start();
require '../config.php';
require '../lib/session_login_admin.php';

                
                                          
require '../lib/header_admin.php';
?> 
                <div class="row">
                        <div class="col-lg-12">
                        <div class="card">    
                        <div class="card-body table-responsive">                            
                                <h4 class="m-t-0 header-title text-center">INFORMASI AKUN PUSAT</h4><hr>
                                
                                <?php 
                                $postdata = "api_key=7DtKZz1Nb5dZaB9eDiVpUNzH3745piWHOZ8LwQZg&action=profile";

	                            $ch = curl_init();
	                            curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/profile");
                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                $chresult = curl_exec($ch);
                                curl_close($ch);
                                $json_result = json_decode($chresult, true);
                                ?>
                                <h5 class="text-info"><b>MAUPEDIA</b></h5>
                                <div class="text-dark">
                                <b>Nama :</b> <?php echo $json_result['data'][0]['nama']; ?><br />
	                            <b>Username :</b> <?php echo $json_result['data'][0]['username']; ?><br />
	                            <b>Sisa Saldo :</b> Rp <?php echo number_format($json_result['data'][0]['sisa_saldo'],0,',','.'); ?><br />
	                            <b>Total Transaksi :</b> Rp <?php echo number_format($json_result['data'][0]['total_pemakaian'],0,',','.'); ?><br />
                                </div>
                                <hr>
                                
                                <h4 class="text-center">Seluruh Saldo Member</h4><hr>
                                <?php $total_duit = $conn->query("SELECT SUM(saldo) AS total FROM users");
                                $data_duit = $total_duit->fetch_assoc(); ?>
                                <p><div class="badge badge-success"><?php echo number_format($data_duit['total'],0,',','.'); ?></div></p>                          
                            </div>                                                        
                        </div>                        
                    </div>
                                
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 header-title text-center">UPDATE LAYANAN & CATEGORY</h4><hr>   
                                <center><b>Update Pulsa</b>
                                <br />
                                <div class="center">
				<a class="btn btn-purple waves-effect w-md waves-light" href="../getN4cG8D/pulsa">Layanan</a>
				<a class="btn btn-purple waves-effect w-md waves-light" href="../getN4cG8D/cat-pulsa">Category</a>
				</div><br /><hr>
				<center><b>Update Sosial Media</b>
                                <br />
                                <div class="center">
				<a class="btn btn-info waves-effect w-md waves-light" href="../getN4cG8D/s1">SERVER 1</a>
				<a class="btn btn-primary waves-effect w-md waves-light" href="../getN4cG8D/s2">SERVER 2</a>
				</div><br /></center>
				</div>                         
                            </div>                               
                        </div>
                        
		    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 header-title text-center">HAPUS LAYANAN & CATEGORY</h4><hr>	
				<center><b>Hapus Sosial Media</b></center>
				
				<center>
				<a class="btn btn-info waves-effect w-md waves-light" href="../getN4cG8D/delete-s1">SERVER 1</a>
				<a class="btn btn-primary waves-effect w-md waves-light" href="../getN4cG8D/delete-s2">SERVER 2</a>
				<br />
				<br />
				<center><b>Hapus Pulsa & Lainnya</b></center>
				
				<center>
				<a class="btn btn-purple waves-effect w-md waves-light" href="../getN4cG8D/del-pulsa">Layanan</a>
				<a class="btn btn-purple waves-effect w-md waves-light" href="../getN4cG8D/del-category-pulsa">Category</a>
                                </div>
                                
				</center><br /><hr>
				<center><b>Hapus Semua</b>
                                <br />
                                <div class="center">
				<a class="btn btn-lg btn-success waves-effect w-md waves-light" href="../getN4cG8D/del-all">DELETE ALL</a>
			        </div><br /></center>
				</div>                         
                            </div>                               
                        </div>                        
                    </div>
<?php 
require '../lib/footer_admin.php';
?>