<?php
require("../config.php");

$cek_pesanan = $conn->query("SELECT * FROM pembelian_pulsa WHERE status IN ('','Pending','Processing') AND provider = 'MAUPEDIA'");

if (mysqli_num_rows($cek_pesanan) == 0) {
  die("Order Pending not found.");
} else {
  while($data_pesanan = $cek_pesanan->fetch_assoc()) {
    $poid =  $data_pesanan['provider_oid'];
    $oid =  $data_pesanan['oid'];
    $id =  $data_pesanan['id'];
    $o_provider =  $data_pesanan['provider'];
  if ($o_provider == "MANUAL") {
    echo "Order manual<br />";
  } else {
    
    $cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'MAUPEDIA'");
    $data_provider = $cek_provider->fetch_assoc();
    
    
    if ($o_provider !== "MANUAL") {
        $api_postdata = "api_key=".$data_provider['api_key']."&action=status&code=$poid";

    } else {
      die("System error!");
    }
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/pulsa");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $chresult = curl_exec($ch);
    curl_close($ch);
    $json_result = json_decode($chresult, true);
    
    if ($o_provider !== "MANUAL") {
      $u_status = $json_result['data']['status'];
      $u_note = $json_result['data']['catatan'];
    }
    
    if($u_status == 'Success'){
        $status = 'Success';
    }else if($u_status == 'Pending'){
        $status = 'Pending';
    }else if($u_status == 'Error'){
        $status = 'Error';
    }else{
        $status = $u_status;
    }    
    $update_pesanan = $conn->query("UPDATE pembelian_pulsa SET keterangan = '$u_note', status = '$status' WHERE oid = '".$data_pesanan['oid']."'");
    if ($update_pesanan == TRUE) {
      echo "".$data_pesanan['provider_oid']." status $status | keterangan $u_note <br />";
    } else {
      echo "Error database.";
    }
  }
  }
}