

<a href="sayfaEkle.php">EKLE</a><hr>
<?php 

include("baglan.php"); 
$sql= "SELECT * FROM sayfalar";

$sonuc= $baglan->query($sql);
if ($sonuc->num_rows > 0) 
{
  while($cek = $sonuc->fetch_assoc()) 
   {
    $id=$cek["id"];
    $baslik=$cek["baslik"];
   
    echo $id."-".$baslik. "<br>";
    echo "<a href='sayfaGoster.php?id=".$id."'>Detay</a>"."<br>";
    echo "<a href='sayfaSil.php?id=".$id."'>Sil</a>"."<br>";
    echo "<a href='sayfaGuncelle.php?id=".$id."'>Güncelle</a>"."<br>";
   }
} else {  echo "Sonuç Bulunamadı."; }

?>
