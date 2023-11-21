
<?php
include("baglan.php"); 
$id=$_POST["id"];
$baslik=$_POST["baslik"];
$icerik=$_POST["icerik"];
$sql= "UPDATE sayfalar SET baslik=?, icerik=? WHERE  id=?; "; 
$sorgu=$baglan->prepare($sql);
$sorgu->bind_param("ssi",$baslik,$icerik,$id);
$sonuc=$sorgu->execute();
if($sonuc){
    echo "kayıt başarılı bir şekilde güncellendi";
    header('Refresh:1; index.php');
}else{
    echo "hata oluştu". mysqli_connect_error();
}
?>