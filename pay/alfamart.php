<?php
session_start();
require("../config.php");
require '../lib/session_user.php';	
require '../lib/session_login.php';
require("../lib/header.php");
?> 
			<div class="row">
                        <div class="col-sm-12">
                        <div class="card">    
                        <div class="card-body table-responsive">                            
                                <h4 class="m-t-0 header-title">
                                <center>                                
                                <h4>DEPOSIT VIA ALFAMART</h4></h4>
                                <br>
                                <center>
                                <p>Silahkan Hubungi Admin di <a class="text-success" href="https://wa.me/6282232894326"><b>WhatsApp</b></a> atau <a class="text-info" href="https://grace-panel.com/tiket/"><b>Tiket Bantuan</b></a> Untuk Deposit Via ALFAMART.</p>                                
                                <br>
                                <p>
                                <i class="fa fa-arrow-circle-down fa-3x text-primary"></i>
                                </p>
                                <br>
                                <div class="btn-group m-t-20">
                                <a class="btn btn-success waves-effect w-md waves-light" href="https://wa.me/6282232894326"><i class="mdi mdi-whatsapp" aria-hidden="true"></i> WhatsApp</a>
                                </div> 
                                <div class="btn-group m-t-20">                          
                                <a class="btn btn-info waves-effect w-md waves-light" href="https://grace-panel.com/tiket/"><i class="remixicon-mail-send-line" aria-hidden="true"></i> Tiket Bantuan</a>             
                                </div>
                                <br>
                                </center>                
                            </div>                               
                        </div>                        
                    </div>
                </div>
<?php
require '../lib/footer.php';
?>

