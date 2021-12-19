<?php
require_once("../config.php");
$delet_service=mysqli_query($conn, "DELETE FROM layanan_pulsa");
if($delet_service == TRUE){
    echo"success";
    
}else{
    echo"gagal";
}