<?php
require_once("../config.php");

$cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'MAUPEDIA'");
$data_provider = $cek_provider->fetch_assoc();

$postdata = "api_key=".$data_provider['api_key']."&action=category";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/pulsa");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
curl_close($ch);
$json_result = json_decode($chresult, true);

$indeks=0;
while($indeks < count($json_result['data'])){
$nama = $json_result['data'][$indeks]['nama'];
$kode = $json_result['data'][$indeks]['kode'];
$tipe = $json_result['data'][$indeks]['tipe'];
$indeks++;
 
$check_services_pulsa = mysqli_query($conn, "SELECT * FROM kategori_layanan WHERE kode = '$kode'");
            $data_services_pulsa = mysqli_fetch_assoc($check_services_pulsa);
        if(mysqli_num_rows($check_services_pulsa) > 0) {
            echo "Code Sudah Ada Di database => $kode \n <br />";
        } else {
           
$insert = mysqli_query($conn, "INSERT INTO kategori_layanan (nama, kode, tipe) VALUES ('$nama', '$kode','$tipe')");

if($insert == TRUE){
echo"SUKSES INSERT -> Nama : $nama || Kode : $kode || Tipe : $tipe <br />";
}else{
    echo "GAGAL MEMASUKAN DATA";
   
}
}
}
?>
