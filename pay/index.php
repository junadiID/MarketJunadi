<?php
session_start();
require("../config.php");
require '../lib/session_user.php';
	require '../lib/session_login.php';
	
	require("../lib/header.php");
?>
			<div class="row">
	    <div class="col-12">
	        <div class="card card-body">
	            <h3 class="text-center"> METODE DEPOSIT </h3>
	            <div class="row" style="margin-top:20px;">	                
	                <div class="col-lg-4 col-sm-12">
	                    <a class="card card-body text-center text-success" href="pulsa" style="height:200px;">
	                        <center>
	                        <br>	                        
	                            <img src="/assets/images/logo/pulsa.png" class="img-responsive" width="200"/>
	                        </center>
	                        <br>
	                        <h4>Pulsa Transfer</h4>
	                    </a>
	                </div>
	                
	                <div class="col-lg-4 col-sm-12">
	                    <a class="card card-body text-center text-success" href="alfamart" style="height:200px;">
	                        <center>
	                            <img src="/assets/images/logo/alfamart.png" class="img-responsive" width="200"/>
	                        </center>
	                        <h4>Alfamart</h4>
	                    </a>
	                </div>
	            </div>
	            
	            <div class="row">
	                <div class="col-lg-4 col-sm-12">
	                    <a class="card card-body text-center text-success" href="dana" style="height:200px;">
	                        <center>
	                            <img src="/assets/images/logo/dana.jpg" class="img-responsive" width="200"/>
	                        </center>
	                        <h4>DANA Transfer</h4>
	                    </a>
	                </div>
	                
	                <div class="col-lg-4 col-sm-12">
	                    <a class="card card-body text-center text-success" href="gopay" style="height:200px;">
	                        <center>
	                            <img src="/assets/images/logo/gopay.png" class="img-responsive" width="200"/>
	                        </center>
	                        <h4>GO-PAY Transfer</h4>
	                    </a>
	                </div>
	                
	                <div class="col-lg-4 col-sm-12">
	                    <a class="card card-body text-center text-success" href="ovocash" style="height:200px;">
	                        <center>
	                            <img src="/assets/images/logo/ovo.png" class="img-responsive" width="200"/>
	                        </center>
	                        <h4>OVO Cash</h4>
	                    </a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
				
<?php
	require ("../lib/footer.php");
?>