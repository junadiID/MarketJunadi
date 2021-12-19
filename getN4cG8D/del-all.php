<?php
require_once("../config.php");
$delet_service=mysqli_query($conn, "DELETE FROM layanan_pulsa");
if($delet_service == TRUE){
    echo '<font color="green">BERHASIL LAYANAN PULSA DI HAPUS</font><br />';
    
}else{
    echo '<font color="red">GAGAL BOSKU CEK SCRIPTNYA DONG PULSA </font><br />';
}
?>
<?php
$delet_service=mysqli_query($conn, "DELETE FROM layanan_sosmed");
if($delet_service == TRUE){
    echo '<font color="green">BERHASIL LAYANAN SOSMED DI HAPUS</font><br />';
    
}else{
    echo '<font color="red">GAGAL BOSKU CEK SCRIPTNYA DONG SOSMED </font><br />';
}
?>
<?php
$delet_service=mysqli_query($conn, "DELETE FROM kategori_layanan");
if($delet_service == TRUE){
    echo '<font color="green">BERHASIL CATEGORY DI HAPUS</font><br />';
    
}else{
    echo '<font color="red">GAGAL BOSKU CEK SCRIPTNYA DONG CATEGORY </font><br />';
}
?>