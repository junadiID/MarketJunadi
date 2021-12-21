<?php
require_once("../config.php");

$cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'MAUPEDIA'");
$data_provider = $cek_provider->fetch_assoc();

$postdata = "api_key=".$data_provider['api_key']."&action=layanan";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/pulsa");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
//echo $chresult;
curl_close($ch);
$json_result = json_decode($chresult, true);

$no=1;
$indeks=0;
while($indeks < count($json_result['data'])){ 
$id = $json_result['data'][$indeks]['sid'];
$oprator = $json_result['data'][$indeks]['operator'];
$name = $json_result['data'][$indeks]['layanan'];
$price = $json_result['data'][$indeks]['harga'];
$status = $json_result['data'][$indeks]['status'];
$tipe = $json_result['data'][$indeks]['tipe'];
$catatan = $json_result['data'][$indeks]['catatan'];
$indeks++;

$rate_asli = $price + 200;
$harga_api = $price + 100;

$status_asli = strtr($status, array(
			'Active' => 'Normal',
			'Not Active' => 'Gangguan',
		));

 $check_layanan_pulsa = mysqli_query($conn, "SELECT * FROM layanan_pulsa WHERE provider_id = '$id'");
 $data_layanan_pulsa = mysqli_fetch_assoc($check_layanan_pulsa);
        if(mysqli_num_rows($check_layanan_pulsa) > 0) {
        $update = mysqli_query($conn, "UPDATE layanan_pulsa SET harga = '$rate_asli', harga_api = '$harga_api', status = '$status_asli' WHERE provider_id = '$id'");
            echo '<font color="blue">Sudah Ada</font> = '.$name.'<br />';
            echo ($update == true) ? '<font color="green">Update Sukses!</font><br />Harga Asli: '.$price.'<br />Harga Web Baru: '.$rate_asli.'<br /> Harga Api Baru: '.$harga_api.'<br /> Status: '.$status_asli.'<br /><br />' : '<font color="red">Update Gagal: '.mysqli_error($conn).'</font><br />';
        } else {
$sid = $no++;
$insert = mysqli_query($conn,"INSERT INTO layanan_pulsa(service_id, provider_id, operator, layanan, harga, harga_api, keterangan, profit, status, provider, tipe) VALUES ('$sid','$id','$oprator','$name','$rate_asli','$harga_api', '$catatan','200','$status_asli','MAUPEDIA','$tipe')");
if($insert == TRUE){
echo"SUKSES INSERT<br />Nama : $name<br />Harga web : $rate_asli<br />Harga api : $harga_api<br /><br />";
}else{
    echo "GAGAL MEMASUKAN DATA";
   
}
}
}
?>