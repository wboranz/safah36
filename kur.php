<html>
<head>

<link rel="stylesheet" href="css/primary.css" type="text/css" enctype="multipart/form-data"/>
<script type="text/javascript" src="scripts/tooltip.js"></script>


<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>

<title>Troypc Ki�isel Web Sitesi Kurulumu</title>
</head>
<body>
<center>
<br><br><br><br>

<font color="red" ><big><b>>>>Site kurulumunuz i�in a��a��daki y�nergeleri inceleyin!<<< <br>
>>>Kurulum i�in Mysql veri taban� y�netinizden birtak�m bilgiler edinmelisiniz. (Veri taban� kullan�c� ad�, �ifresi, ad�)<<<<br>
<br>
</b></big></font>

<br><br>
<hr>
<br><br>

<table><tr><td>
<font color="#3366ff" ><big><b>Troypc Ki�isel Web Sitesi Kurulumu <br>1. Ad�m</b></big></font><br>
</td></tr><tr><td>
<font color="#3366ff" ><b>L�tfen Y�nergeleri uygulay�n�z :</b></font>
</td></tr>
<tr><td><b><font color="red" >1)</font> "baglan.php" dosyas�ndaki bilgileri kendinize g�re d�zenleyin. (Veri taban� kullan�c� ad�, �ifresi, ad�)</b></td></tr>
<tr><td><b><font color="red" >2)</font> images klas�r�ndeki foto klas�r�n�n CHmod ayarlar�n� "777" yap�n. (Nas�l yapaca��n�z� bilmiyorsan�z, internetten daha fazla bilgi al�n�z.)</b></td></tr>
<tr><td><b><font color="red" >3)</font> S�ylenenleri yapt�ysan�z 2. ad�ma ge�iniz. (S�ylenenleri yapmadan di�er ad�ma ge�meniz katiyyen �nerilmez.)</b></td></tr>
<tr><td><b><font color="red" >4)</font> mysql.sql dosyas�n� pma'dan i�eri aktar�n.</b></td></tr>
<table>
<br><br>
<hr>
<br><br>


<table>
<tr><td>
<font color="#3366ff" ><big><b>Troypc Ki�isel Web Sitesi Kurulumu <br>2. Ad�m</b></big></font><br>
</td></tr>
<tr><td>
<center>
<form action="ayarlar.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
<font color="#3366ff" ><b>Web Sitenizin Ad� :</b></font>
<input type="hidden" name="adminmail" value="brktkk@hotmail.com">
</td>
<td>
<input type="text" name="siteadi" id="siteadi" size="20" maxlength="100"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Sitenizin URL'si :</b></font>
</td>
<td>
<input type="text" name="siteurl" id="siteurl" size="20" maxlength="100"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Ad�n�z :</b></font>
</td>
<td>
<input type="text" name="adiniz" id="adiniz" size="20" maxlength="100"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Soyad�n�z : </b></font>
</td>
<td>
<input type="text" name="soyadiniz" id="soyadiniz" size="20" maxlength="30"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>E-posta Adresiniz : </b></font>
</td>
<td>
<input type="text" name="email" id="email" size="20" maxlength="30"><br>
Sizinle ileti�ime ge�mek isteyenlere g�sterilecektir.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Do�um Yeriniz :</b></font>
</td>
<td>
<input type="text" name="dyeri" id="dyeri" size="20" maxlength="30"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Do�um Y�l�n�z :</b></font>
</td>
<td>
<input type="text" name="dyili" id="dyili" size="5" maxlength="4"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Vesikal�k Resminiz :</b></font>
</td>
<td>
<input type="file" name="vesika" size="30" maxlength="100"><br>
Herhangi bir resminiz olabilir.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Hakk�n�zda K�sa Yaz� :</b></font>
</td>
<td>
<textarea name="hakkimda" rows="7" cols="40"  id="hakkimda" ></textarea><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Meslek :</b></font>
</td>
<td>
<input type="text" name="meslek" id="meslek" size="20" maxlength="30"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Hobiler :</b></font>
</td>
<td>
<input type="text" name="hobiler" id="hobiler" size="20" maxlength="30"><br>
Yazarken aras�na virg�l(,) koyunuz.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Cep Telefonu :</b></font>
</td>
<td>
<input type="text" name="cept" id="cept" size="20" maxlength="30"><br>
Sizinle ileti�ime ge�mek isteyenlere verilecektir. <br>Vermek istemezseniz l�tfen bo� b�rak�n.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Ev Telefonu :</b></font>
</td>
<td>
<input type="text" name="evt" id="evt" size="20" maxlength="30"><br>
Sizinle ileti�ime ge�mek isteyenlere verilecektir. <br>Vermek istemezseniz l�tfen bo� b�rak�n.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>�� Telefonu :</b></font>
</td>
<td>
<input type="text" name="ist" id="ist" size="20" maxlength="30"><br>
Sizinle ileti�ime ge�mek isteyenlere verilecektir. <br>Vermek istemezseniz l�tfen bo� b�rak�n.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>�ifreniz :</b></font>
</td>
<td>
<input type="password" name="sifre" id="sifre" size="20" maxlength="30"><br>
Olu�turdu�unuz �ifre ak�lda kal�c� olmal�d�r. <br>Resim eklerken sizden bu �ifreyi isteyece�iz.
</td>
</tr>

<br><br>
<tr>
<td>
<input type="submit" value="G�nder" name="B1"> </form>
</td>
<tr>
</table>
</center>
</td></tr>
</table>
</center>
<div style="position: fixed; bottom: 0px; right: 0px;" >
<img src="/images/design.gif" ></div>
</body>
</html>