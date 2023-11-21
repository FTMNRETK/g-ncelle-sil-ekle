<?php
session_start();
include("baglan.php"); 
$kullanici_adi=$_POST["kullanici_adi"];
$parola=$_POST["parola"];
$sql= "select * from uyeler WHERE kullanici_adi=?
 AND parola=?";
$sorgu=$baglan->prepare($sql);
$sorgu->bind_param("ss",$kullanici_adi,$parola);
$sorgu->execute();
$sonuc= $sorgu->get_result();
if ($sonuc->num_rows > 0) 
{
  $_SESSION["girisYaptimi"]=true;   
  header("Location: index.php");
} else { 
     echo "Kullnıcı adınız veya parolanız yanlış";
     }

?>