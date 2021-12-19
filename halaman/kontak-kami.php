<?php
session_start();
require '../config.php';
require '../lib/header.php';
?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">    
                        <div class="card-body table-responsive">                            
                                <h4 class="m-t-0 header-title">
                                <center><img src="https://grace-panel.com/assets/images/Admin.png" width="190px" height="160px"></center>
                                <br>
                                <b><center> CEO & FOUNDER </b></center></h4>         
                        <center>Junjun Junaedi</center>
                        <br>
                            <h4 class="m-t-0 header-title"><b><center><i class="fa fa-home"></i>Alamat</b></center></h4>         
                        <center>Gunung Puyuh, Kota Sukabumi, Jawa Barat, Indonesia</center>
                        <br>    
                        </div>        
                            <div class="card-body table-responsive">
                                <h4 class="m-t-0 header-title"><b><center><i class="fa fa-phone"></i>  Kontak Kami</b></h4>                              
<?php 
$CallPage = Show('halaman', "id = '1'");
echo "".$CallPage['konten']."";
?>                                                
                            </div>                               
                        </div>                        
                    </div>
                </div>
<?php
require '../lib/footer.php';
?>