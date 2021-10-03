<?php                    
$source = $_FILES["resim"]["tmp_name"];
$ffname = $_FILES["resim"]["name"];
$fftype = $_FILES["resim"]["type"];
$ffsize = $_FILES["resim"]["size"];
$target = "images/foto";        
                
                    $upload = move_uploaded_file($source,$target.'/'.$ffname);
                    
                if ($upload){
                    $no = $_POST[no];
                    $isim = $_POST[isim];    
                    $aciklama = $_POST[aciklama];
}                    

if(empty($isim)){
echo("<center><b>Resim adýný belirtmediniz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($aciklama)){
echo("<center><b>Yorum yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($ffname)){
echo("<center><b>Yüklemecek resmi seçmediniz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("baglan.php");
$sql = "insert into resim (no, isim, aciklama, resimurl, boyut, tur) values (null, '$isim', '$aciklama', '$ffname', '$ffsize', '$fftype')";
$kayit = mysql_query($sql);
}

{
$sorgu=mysql_query("select * from bilgi limit 1");
while($satir=mysql_fetch_row($sorgu))

$siteadi=$satir[0];
$siteurl=$satir[1];

}
if (isset ($kayit)){
echo "<meta http-equiv='refresh' content='0;URL=$siteurl/resimlerim.php'>";
}
else {
echo "Kayýt Baþarýsýz!";
}
?> 
