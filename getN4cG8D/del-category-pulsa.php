<?php
require_once("../config.php");
$delet_service=mysqli_query($conn, "DELETE FROM kategori_layanan WHERE tipe NOT IN ('Sosial Media','SOSMED')");
if($delet_service == TRUE){
    echo"success";
    
}else{
    echo"jancok ora iso";
}