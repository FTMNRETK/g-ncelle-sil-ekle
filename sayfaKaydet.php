
<?php 
include("baglan.php"); 

$baslik=$_POST["baslik"];
$icerik=$_POST["icerik"];

$sql= "INSERT INTO sayfalar (baslik, icerik) VALUES ('$baslik', '$icerik');"; 
$sonuc= $baglan->query($sql); 
if($sonuc){
    echo "kayıt başarılı bir şekilde eklendi";
    header('Refresh:1; index.php');
}else{
    echo "hata oluştu";
}
?>