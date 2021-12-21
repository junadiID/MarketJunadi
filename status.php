<?php
require("config.php");
 
$ip_dpedia = "172.105.239.47";
 
if( $_SERVER['REMOTE_ADDR'] == $ip_dpedia ){
   
    $data_masuk = $_POST['content'];
    $json = json_decode($data_masuk,TRUE);

    $oid        = $json['oid'];
    $service    = $json['service'];
    $price      = $json['price'];
    $status     = $json['status'];
    $date       = $json['date'];
    $catatan    = $json['catatan'];
    
    $sql             = "UPDATE pembelian_pulsa SET keterangan = '$catatan', status = '$status' WHERE provider_oid = '$oid' AND provider = 'DPEDIA'";
    
    $ok   = mysqli_query($conn,$sql);
    
    if ( $ok == TRUE){
        echo json_encode([
            "status"    => "ok"
            ]);
            
    }else{
        echo json_encode([
            "status"    => "fail"
            ]);
    }
}