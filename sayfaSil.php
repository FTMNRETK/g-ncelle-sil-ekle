
<?php 
include("baglan.php"); 
$silinecek_id=$_GET["id"];
$sql= "DELETE FROM sayfalar WHERE id=$silinecek_id"; 
$sonuc= $baglan->query($sql); 
if($sonuc){
    echo "kayıt başarılı bir şekilde silindi";
    header('Refresh:1; index.php');
}else{
    echo "hata oluştu";
}
?>