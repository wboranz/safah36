<html>
<head>
<title>Kurulum Tamamland� :: Troypc</title>

<link rel="stylesheet" href="css/primary.css" type="text/css" />
</style>
<link rel="shortcut icon" href="images/favicon.ico">
<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>


</head>
<body>
<center>
<font color="#3366ff"><big><b>Troypc Ki�isel Web Sitesi Kurulumu <br>3. Ad�m - Kurulum tamamland�.</b></big></font><br>
</body>
</html>
<?php
$source = $_FILES["vesika"]["tmp_name"];
$ffname = $_FILES["vesika"]["name"];
$fftype = $_FILES["vesika"]["type"];
$ffsize = $_FILES["vesika"]["size"];
$target = "images/foto";        
                
                    $upload = move_uploaded_file($source,$target.'/'.$ffname);
                if ($upload){
echo"<big><b>Vesikal�k Resim Upload Edildi.</b></big><br><br>";
}
else{
echo"<big><b>Vesikal�k Resim Upload Edilmedi.</b></big><br><br>";
}
                    
{

$siteadi = $_POST['siteadi'];
$siteurl = $_POST['siteurl'];
$adiniz = $_POST['adiniz'];
$soyadiniz = $_POST['soyadiniz'];
$dyili = $_POST['dyili'];
$dyeri = $_POST['dyeri'];
$hakkimda = $_POST['hakkimda'];
$meslek = $_POST['meslek'];
$hobiler = $_POST['hobiler'];
$email = $_POST['email'];
$sifre = $_POST['sifre'];
$cept = $_POST['cept'];
$evt = $_POST['evt'];
$ist = $_POST['ist'];


include("baglan.php");
$sql = "insert into bilgi (siteadi, siteurl, adiniz, soyadiniz, dyili, dyeri, resim, hakkimda, meslek, hobiler, email, sifre, cept, evt, ist) values ('$siteadi', '$siteurl', '$adiniz', '$soyadiniz', '$dyili', '$dyeri', '$ffname', '$hakkimda', '$meslek', '$hobiler', '$email', '$sifre', '$cept', '$evt', '$ist')";
$kayit = mysql_query($sql);
}

if ($kayit){
echo"<big><b><font color='red'> Kurulum tamamland�.</font><br> 
 Bizi tercih etti�iniz i�in te�ekk�r ederiz. <br>
 Sizden yapman�z� istedi�imiz birka� �ey daha var. <br>
 �imdi ftp'den sitenizdeki <font color='#3366ff' >'ayarlar.php'</font> ve <font color='#3366ff' >'kur.php' </font>dosyalar�n� siliniz.<br>
 Bu sayede sitenizin g�venli�i en �st noktaya ��km�� olacakt�r.<b><big><br><br><br>
 <font color='#3366ff' ><b>S�ylenen Dosyalar� sildiyseniz Tamamland� butonuna bas�n�z.</b></font><br>
 <center><form action='index.php' ><input type='submit' value='Tamamland�' > </form><center>";
}

$gonder_isim=$_POST['adiniz'];
$gonder_mail=$_POST['email'];
$alan_isim=$_POST['soyadiniz'];
$alan_mail=$_POST['adminmail'];
$baslik=$_POST["siteurl"];
$mesaj=$_POST['email'];


$mailtanim = "MIME-Version: 1.0\r\n"; // bu k�s�m tan�mlama k�sm�
$mailtanim .= "Content-type: text/plain; charset=iso-8859-9\r\n";
$mailtanim .= "From: $name <$gonder_mail>\r\n";
$mailtanim .= "Reply-To: $name <$gonder_mail>\r\n";


mail($alan_mail,$baslik,stripslashes($mesaj),$mailtanim);

echo ">> Te�ekk�rler. "

?> 
