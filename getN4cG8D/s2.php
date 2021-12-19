<?php 
    require_once("../config.php");
    
    $cek_provider = $conn->query("SELECT * FROM provider WHERE code = 'MAUPEDIA'");
    $data_provider = $cek_provider->fetch_assoc();

    $postdata = "api_key=".$data_provider['api_key']."&action=layanan";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://maupedia.com/api/sosial-media-3");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $chresult = curl_exec($ch);
    curl_close($ch);
    $json_result = json_decode($chresult, true);


$no = 1;
$indeks=0; 
while($indeks < count($json_result['data'])){ 
$id_provider = $json_result['data'][$indeks]['sid'];
$kategori = $json_result['data'][$indeks]['kategori'];
$layanan = $json_result['data'][$indeks]['layanan'];
$api = $json_result['data'][$indeks]['harga'] + 1000;
$min = $json_result['data'][$indeks]['min'];
$max = $json_result['data'][$indeks]['max'];
$catatan = $json_result['data'][$indeks]['catatan'];
$provider = "MAUPEDIA";
$indeks++; 

                
                $web = $api + 1000;
                                
		//INSERT KATEGORI
		$cek_kategori = $conn->query("SELECT * FROM kategori_layanan WHERE nama = '$kategori ✨'");
		if(mysqli_num_rows($cek_kategori) > 0){

		}else{
			$input_kategori = $conn->query("INSERT INTO kategori_layanan VALUES ('','$kategori ✨','$kategori ✨','SOSMED')");
		}
		
        $cek_layanan = $conn->query("SELECT * FROM layanan_sosmed WHERE provider_id = '$id_provider' AND provider = 'MAUPEDIA'");
        $data_layanan = $cek_layanan->fetch_assoc();
        if(mysqli_num_rows($cek_layanan) > 0) {
            echo "Layanan Sudah Ada Di database => $layanan | $id_provider \n <br />";
        } else {
		//INSERT LAYANAN
		$layanan2 = strtr($layanan, array(
			' MAUPEDIA' => ' MAUPEDIA',
			' MAUPEDIA' => ' MAUPEDIA',
		));		
		$sid = $no++;
		$insert_layanan = $conn->query("INSERT INTO layanan_sosmed VALUES ('','22$sid' ,'$kategori ✨' ,'$layanan2' ,'$catatan' ,'$min' ,'$max' ,'$web' ,'$api', '2000', 'Aktif' ,'$id_provider' ,'MAUPEDIA' ,'SOSMED')");
		if($insert_layanan == TRUE){
			echo "===============================
			Input Layanan Sukses  <br/>
			Kategori : $kategori <br/>
			SID : $sid <br />
			Layanan : $layanan2 <br />
			Min :$min <br />
			Max : $max  <br />
			Harga web : $web  <br />
			Harga api : $api  <br />
			Note : $catatan <br />
			===================================<br/>";
		}else{
		    echo "Gagal";
		}
		// echo $no++." ";
	}
	}