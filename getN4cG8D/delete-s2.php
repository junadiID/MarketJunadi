<?php
require_once("../config.php");
$delet_service=mysqli_query($conn, "DELETE FROM kategori_layanan WHERE tipe = 'SOSMED'");
if($delet_service == TRUE){
    echo"success";
    
}else{
    echo"gagal";
}
?>
<?php
require_once("../config.php");
$delet_service=mysqli_query($conn, "DELETE FROM layanan_sosmed WHERE provider = 'WSTORE'");
if($delet_service == TRUE){
    echo"success";
    
}else{
    echo"gagal";
}
?>