<?php 

include("baglan.php"); 
$sql= "SELECT * FROM üyeler";

$sonuc= $baglan->query($sql);
if ($sonuc->num_rows > 0) 
{
  while($cek = $sonuc->fetch_assoc()) 
   {
    $id=$cek["id"];
    $isim=$cek["isim"];
    $soyisim=$cek["soyisim"];
    $tc=$cek["tc"];
    $telefon=$cek["telefon"];
   
    echo $id."-".$isim. "<br>".$soyisim. "<br>";
    echo "<a href='sayfaGoster.php?id=".$id."'>Detay</a>"."<br>";
    echo "<a href='sayfaSil.php?id=".$id."'>Sil</a>"."<br>";
    echo "<a href='Guncelle.php?id=".$id."'>Güncelle</a>"."<br>";
   }
} else {  echo "Sonuç Bulunamadı."; }
