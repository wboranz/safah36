<html>
<head>

<link rel="stylesheet" href="css/primary.css" type="text/css" enctype="multipart/form-data"/>
<script type="text/javascript" src="scripts/tooltip.js"></script>


<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>

<title>Troypc Kişisel Web Sitesi Kurulumu</title>
</head>
<body>
<center>
<br><br><br><br>

<font color="red" ><big><b>>>>Site kurulumunuz için aşşağıdaki yönergeleri inceleyin!<<< <br>
>>>Kurulum için Mysql veri tabanı yönetinizden birtakım bilgiler edinmelisiniz. (Veri tabanı kullanıcı adı, Şifresi, adı)<<<<br>
<br>
</b></big></font>

<br><br>
<hr>
<br><br>

<table><tr><td>
<font color="#3366ff" ><big><b>Troypc Kişisel Web Sitesi Kurulumu <br>1. Adım</b></big></font><br>
</td></tr><tr><td>
<font color="#3366ff" ><b>Lütfen Yönergeleri uygulayınız :</b></font>
</td></tr>
<tr><td><b><font color="red" >1)</font> "baglan.php" dosyasındaki bilgileri kendinize göre düzenleyin. (Veri tabanı kullanıcı adı, Şifresi, adı)</b></td></tr>
<tr><td><b><font color="red" >2)</font> images klasöründeki foto klasörünün CHmod ayarlarını "777" yapın. (Nasıl yapacağınızı bilmiyorsanız, internetten daha fazla bilgi alınız.)</b></td></tr>
<tr><td><b><font color="red" >3)</font> Söylenenleri yaptıysanız 2. adıma geçiniz. (Söylenenleri yapmadan diğer adıma geçmeniz katiyyen önerilmez.)</b></td></tr>
<tr><td><b><font color="red" >4)</font> mysql.sql dosyasını pma'dan içeri aktarın.</b></td></tr>
<table>
<br><br>
<hr>
<br><br>


<table>
<tr><td>
<font color="#3366ff" ><big><b>Troypc Kişisel Web Sitesi Kurulumu <br>2. Adım</b></big></font><br>
</td></tr>
<tr><td>
<center>
<form action="ayarlar.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
<font color="#3366ff" ><b>Web Sitenizin Adı :</b></font>
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
<font color="#3366ff" ><b>Adınız :</b></font>
</td>
<td>
<input type="text" name="adiniz" id="adiniz" size="20" maxlength="100"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Soyadınız : </b></font>
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
Sizinle iletişime geçmek isteyenlere gösterilecektir.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Doğum Yeriniz :</b></font>
</td>
<td>
<input type="text" name="dyeri" id="dyeri" size="20" maxlength="30"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Doğum Yılınız :</b></font>
</td>
<td>
<input type="text" name="dyili" id="dyili" size="5" maxlength="4"><br>
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Vesikalık Resminiz :</b></font>
</td>
<td>
<input type="file" name="vesika" size="30" maxlength="100"><br>
Herhangi bir resminiz olabilir.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Hakkınızda Kısa Yazı :</b></font>
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
Yazarken arasına virgül(,) koyunuz.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Cep Telefonu :</b></font>
</td>
<td>
<input type="text" name="cept" id="cept" size="20" maxlength="30"><br>
Sizinle iletişime geçmek isteyenlere verilecektir. <br>Vermek istemezseniz lütfen boş bırakın.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Ev Telefonu :</b></font>
</td>
<td>
<input type="text" name="evt" id="evt" size="20" maxlength="30"><br>
Sizinle iletişime geçmek isteyenlere verilecektir. <br>Vermek istemezseniz lütfen boş bırakın.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>İş Telefonu :</b></font>
</td>
<td>
<input type="text" name="ist" id="ist" size="20" maxlength="30"><br>
Sizinle iletişime geçmek isteyenlere verilecektir. <br>Vermek istemezseniz lütfen boş bırakın.
</td>
</tr>

<tr>
<td>
<font color="#3366ff" ><b>Şifreniz :</b></font>
</td>
<td>
<input type="password" name="sifre" id="sifre" size="20" maxlength="30"><br>
Oluşturduğunuz şifre akılda kalıcı olmalıdır. <br>Resim eklerken sizden bu şifreyi isteyeceğiz.
</td>
</tr>

<br><br>
<tr>
<td>
<input type="submit" value="Gönder" name="B1"> </form>
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