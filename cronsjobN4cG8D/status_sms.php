<?php
require("../config.php");

$ThisCheck = $conn->query("SELECT * FROM tbl_sms WHERE status IN ('','Pending','Processing')");

if (mysqli_num_rows($ThisCheck) == 0) {
  die("Order Pending not found.");
} else {
  while($ThisData = $ThisCheck->fetch_assoc()) {
                $curl = curl_init();
                
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://smsgateway.me/api/v4/message/".$ThisData['provider_oid']."",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0ODc3NTM1OSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjYzMTM4LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.vqvpLW--JuqFbH05rmyVOkAEnT0F2AegavDLHXbXeZI",
                        "cache-control: no-cache",
                        "content-type: application/json",
                        "postman-token: 5dc7344c-75e9-be94-7467-6e285de32451"
                    ),
                ));
                $ResponJSON = curl_exec($curl);
                print_r($ResponJSON);
                $decodeJSON = json_decode($ResponJSON, true);
                $u_status = $decodeJSON['status'];

    if ($u_status == "sent") {
        $status = "Success";
    } else if ($u_status == "queued") {
        $status = "Error";
    } else if ($u_status == "canceled") {
        $status = "Error";
    } else {
        $status = "Pending";
    }   

$update_pesanan = $conn->query("UPDATE tbl_sms SET status = '$status' WHERE oid = '".$ThisData['oid']."'");
    if ($update_pesanan == TRUE) {
      echo "<br/>".$ThisData['provider_oid']." status $status <br />";
    } else {
      echo "Error database.";
    }
}
}