
<?php
include("baglan.php");
$gelen_id=$_GET["id"];
$sql= "select * from sayfalar WHERE id=?"; 
$sorgu=$baglan->prepare($sql);
$sorgu->bind_param("i",$gelen_id);
$sorgu->execute();
$sonuc= $sorgu->get_result();

if ($sonuc->num_rows > 0) 
{
  while($cek = $sonuc->fetch_assoc()) 
   {
    $id=$cek["id"];    
    $baslik=$cek["baslik"];    
    $icerik=$cek["icerik"];
   
    echo $id."-".$baslik. "<hr> ". $icerik;
   }
} else {  echo "Sonuç Bulunamadı."; }

?>