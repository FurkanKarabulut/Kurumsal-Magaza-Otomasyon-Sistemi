<?php 
$host='localhost';
$db = 'odev1';
$username = 'postgres';
$password = '123456';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
try{
  $conn = new PDO($dsn);
 
  if($conn){
  
  }
 }catch (PDOException $e){
     header ('404.php');
 }

 $garson_ad="";
 $kat="";
 $marka="";
 $fiyat="";
 $urun_ad="";
 $katliste=[];
 $katlisteid=[];
 $markalis=[];
 $markaid=[];

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM urun inner join kategori on (kat_id=katag_id) inner join altkategori on (altkategori.altkategori_id=urun.altkategori_id) where urun_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kat=$row['kat_id'];
    $marka=$row['altkategori_ad'];
    $garson_ad=$row['urun_ad'];
 }
 $query = $conn->query("SELECT * FROM  kategori");
 while ($row = $query->fetch()) {
    array_push($katliste,$row['kat_ad']);
    array_push($katlisteid,$row['kat_id']);
 }
 $query = $conn->query("SELECT * FROM  altkategori");
 while ($row = $query->fetch()) {
    array_push($markalis,$row['altkategori_ad']);
    array_push($markaid,$row['altkategori_id']);
 }

echo json_encode(array('a'=>$garson_ad,'b'=>$kat,'c'=>$marka,'d'=>$katlisteid,'e'=>$katliste,'f'=>$markaid,'g'=>$markalis,'z'=>$id)); 