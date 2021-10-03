<?php

$no = $_POST['no'];
$yazan = $_POST['yazan'];
$yorum = $_POST['yorum'];

if(empty($yazan)){
echo("<center><b>Adınızı Belirtmediniz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($yorum)){
echo("<center><b>Yorum yazmadınız. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("baglan.php");
$sql = "insert into yorum (no, yazan, yorum) values (null, '$yazan', '$yorum')";
$kayit = mysql_query($sql);
}
{
$sorgu=mysql_query("select * from bilgi limit 1");
while($satir=mysql_fetch_row($sorgu))

$siteadi=$satir[0];
$siteurl=$satir[1];

}
if (isset ($kayit)){
echo "<meta http-equiv='refresh' content='0;URL=$siteurl/index.php'>";
}
else {
echo "Kayıt Başarısız!";
}
?> 
