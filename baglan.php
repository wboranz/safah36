<?
//bu b�l�m� kendinize g�re doldurunuz <ba�lang��>

$HostSunucusu="localhost"; //%99 olas�l�kla localhosttur.
$MysqlKullaniciAdi="KullaniciAdi"; 
$MysqlSifresi="Sifresi";
$MysqlVeriTabani="VeriTabani";

//bu b�l�m� kendinize g�re doldurunuz <biti�>

//T   �uanda y�kledi�iniz script.
//R   Tamamen �cretsiz.
//O   Tamamen T�rk�e.
//Y   Tamamen T�rk yap�m�.
//P   Tamamen TroypcDesign �irketine aittir.
//C   �yi kullan�mlar.



  $baglan=@mysql_connect("localhost","$MysqlKullaniciAdi","$MysqlSifresi") OR die ("Sistemimiz Kurulum yapmad���n�z� tespit etti. Kurulum sayfas�na gitmek i�in <a href='kur.php' >buraya t�klay�n</a>. <br><font color='red' ><b><big>Fakat kuruluma ba�lamadan �nce ftp'deki baglan.php i�erisindeki bilgileri kendinize g�re d�zenleyin.</big></b></font>");
  @mysql_select_db("$MysqlVeriTabani")or die ("veritabani bulunamadi...");
  mysql_query("SET NAMES 'latin5'");  
?>