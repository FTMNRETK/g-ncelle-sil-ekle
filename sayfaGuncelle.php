
<?php
include("baglan.php"); 
$gelen_id=$_GET["id"];  
$sql= "select * from sayfalar WHERE id=?"; 
$sorgu=$baglan->prepare($sql); $sorgu->bind_param("i",$gelen_id);
$sorgu->execute(); $sonuc= $sorgu->get_result();
 while($cek = $sonuc->fetch_assoc()) 
   {
    $id=$cek["id"];  
     $baslik=$cek["baslik"];    
    $icerik=$cek["icerik"];
   }
?>
<form action="sayfaGuncelleKaydet.php" method="POST">
   <input type="hidden" name="id" value="<?php echo $id ?>">
   Başlık: <input type="text" name="baslik" value="<?php echo $baslik ?>">
    <br>
   İçerik:<textarea rows="5" cols="20" name="icerik" ><?php echo $icerik ?></textarea>
    <input type="submit" value="Güncelle">
</form>