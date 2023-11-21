<?php
$vt_sunucu= "localhost"; 
$vt_kullanici= "root"; 
$vt_sifre= ""; 
$vt_adi= "fatmanur";

$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if ($baglan==false) {
  die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
 
}else{
    
}
?>