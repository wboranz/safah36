<?
//bu bölümü kendinize göre doldurunuz <baþlangýç>

$HostSunucusu="localhost"; //%99 olasýlýkla localhosttur.
$MysqlKullaniciAdi="KullaniciAdi"; 
$MysqlSifresi="Sifresi";
$MysqlVeriTabani="VeriTabani";

//bu bölümü kendinize göre doldurunuz <bitiþ>

//T   Þuanda yüklediðiniz script.
//R   Tamamen ücretsiz.
//O   Tamamen Türkçe.
//Y   Tamamen Türk yapýmý.
//P   Tamamen TroypcDesign Þirketine aittir.
//C   Ýyi kullanýmlar.



  $baglan=@mysql_connect("localhost","$MysqlKullaniciAdi","$MysqlSifresi") OR die ("Sistemimiz Kurulum yapmadýðýnýzý tespit etti. Kurulum sayfasýna gitmek için <a href='kur.php' >buraya týklayýn</a>. <br><font color='red' ><b><big>Fakat kuruluma baþlamadan önce ftp'deki baglan.php içerisindeki bilgileri kendinize göre düzenleyin.</big></b></font>");
  @mysql_select_db("$MysqlVeriTabani")or die ("veritabani bulunamadi...");
  mysql_query("SET NAMES 'latin5'");  
?>