<?php include("baglan.php"); ?>
<html>
<head>

<link rel="stylesheet" href="css/primary.css" type="text/css" />
</style>
<link rel="stylesheet" id="sexy-bookmarks-css"  href="css/shr-custom-sprite.css?ver=3.2.4.2" type="text/css" media="all" />

<link rel="shortcut icon" href="images/favicon.ico">
<META http-equiv=content-type content=text/html;charset=iso-8859-9>
<META http-equiv=content-type content=text/html;charset=windows-1254>
<META http-equiv=content-type content=text/html;charset=x-mac-turkish>


</head>
<body>

<style type="text/css"><!-- #loading{width:0px;height:0px;position:absolute;left:0%;top:0%;margin-top:-50px;margin-left:-100px;text-align:center}--></style> 
<script type="text/javascript"><!-- 
<!-- 
<!-- 
<!-- 
document.write('<div id="loading" ><table border="0" width="1100" height="2000" id="table1" style="background-color:#FFFFFF;" ><tr><td background=""><p align="center"><font color="#FFFFFF" size="2" face="verdana">Sayfa Yükleniyor Bekleyiniz</font></p></td></tr></table></div>');window.onload=function(){document.getElementById("loading").style.display="none";}//--> 
</script> 

<? 
include("baglan.php"); 
$sorgu=mysql_query("select * from bilgi limit 1");
while($satir=mysql_fetch_row($sorgu))
{
$siteadi=$satir[0];
$siteurl=$satir[1];
$adiniz=$satir[2];
$soyadiniz=$satir[3];
$dyili=$satir[4];
$dyeri=$satir[5];
$resim=$satir[6];
$hakkimda=$satir[7];
$meslek=$satir[8];
$hobiler=$satir[9];
$email=$satir[10];
$sifre=$satir[11];
$cept=$satir[12];
$evt=$satir[13];
$ist=$satir[14];
}
?>

<center>

<table cellspacing="0" cellpadding="3" style="width: 800px; height: 570px; border: solid 1px black; background-color: white; ">
  <tr>
    <td colspan="3" style="border-bottom: solid 1px #cccccc;">
      <table width="100%" cellspacing="0" cellpadding="0"><tr><td width="65%">
      <a href="index.php"><img src="images/logo.gif" alt="<?=$adiniz; ?> <?=$soyadiniz; ?>" title="<?=$adiniz; ?> <?=$soyadiniz; ?>" /></a>
      </td><td style="vertical-align:middle; white-space:nowrap;">
      <div class="big"><center><b><?=$adiniz; ?> <?=$soyadiniz; ?></b><br />
[ <a href="index.php">Anasayfa</a> | <a href="iletisim.php">İletişim</a> | <a href="http://scriptkuyusu.6te.net">Troypc</a> ]
</center></div>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td valign="top" style="height: 100%; border-right: solid 1px #cccccc;">
      <img src="images/spacer.gif" alt="" width="140" height="1" /><br />
      <div style="overflow: auto;">
      <div class="big"><b>Navigasyon</b></div>
<a href="index.php"><img src="images/li.gif" > Anasayfa</a><br>
<a href="resimlerim.php"><img src="images/li.gif" > Resimlerim</a><br>
<a href="iletisim.php"><img src="images/li.gif" > İletişim</a><br>
<a href="videolarim.php"><img src="images/li.gif" > Videolarım</a><br><br>


    </td>
    <td valign="top" style="height: 100%;">
      <div style="width: 478px; height: 800px; overflow: auto;">
      <div class="big"><b>&nbsp;<?=$adiniz; ?> <?=$soyadiniz; ?> ile İletişim</b></div>
<table>
<tr>
<td style="width: 478px; height: 150px;" >
<table>
<tr>
<td>
<font color="#cc3366" ><b>Adım Soyadım:</b></font>
</td>
<td>
<?=$adiniz; ?> <?=$soyadiniz; ?>
</td>
</tr>
<tr>
<td>
<font color="#cc3366" ><b>Web Sitem:</b></font>
</td>
<td>
<a href="<?=$siteurl; ?>" ><?=$siteurl; ?></a>
</td>
</tr>
<tr>
<td>
<font color="#cc3366" ><b>E-mail adresim:</b></font>
</td>
<td>
<?=$email; ?>
</td>
</tr>
<tr>
<td>
<font color="#cc3366" ><b>Cep Telefon Numaram:</b></font>
</td>
<td>
<?=$cept; ?>
</td>
</tr>
<tr>
<td>
<font color="#cc3366" ><b>Ev Telefon Numaram:</b></font>
</td>
<td>
<?=$evt; ?>
</td>
</tr>
<tr>
<td>
<font color="#cc3366" ><b>İş Telefon Numaram:</b></font>
</td>
<td>
<?=$ist; ?>
</td>
</tr>
</table>
</td>
</tr>
</table>

<table bolder="2">
<tr>
<td>
<script type="text/javascript"><!--
google_ad_client = "pub-3602356900147773";
/* 468x60, oluşturulma 02.09.2010 */
google_ad_slot = "3960278262";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</td>
</tr>
</table>
<head>

	<title><?=$adiniz; ?> <?=$soyadiniz; ?> :: İletişim</title>

</head>



<? 
if ($sorgu) mysql_free_result($sorgu);
if ($baglan) mysql_close($baglan); 
?>
      </div>
    </td>
    <td valign="top" style="height: 100%; border-left: solid 1px #cccccc;">
      <img src="images/spacer.gif" alt="" width="160" height="1" /><br />
      <div style="overflow: auto;">
      <div class="big"><b>Resimlerim</b></div>



<? 
include("baglan.php"); 
$sorgu=mysql_query("select * from resim order by rand() limit 5");
while($satir=mysql_fetch_row($sorgu))
{
$no=$satir[0];
$isim=$satir[1];
$resimurl=$satir[2];
$aciklama=$satir[3];
echo "
<p><a href='images/foto/$resimurl' ><img alt='Resim' src='images/foto/$resimurl' width='140' height='100' /><br><span>$isim</span></a><br />$aciklama
</p>";
}
?>

    </td>
  </tr>

  <tr>
<td colspan="3" style="border-top: solid 1px #cccccc;">
      <div style="overflow: auto;">
      <div class="big"><b>Beni Takip Edin</b></div>
<? 
include("baglan.php"); 
$sorgu=mysql_query("select * from bilgi");
while($satir=mysql_fetch_row($sorgu))
{
$adi=$satir[0];
$url=$satir[1];

}
?>
<script type="text/javascript" src="css/sexy-bookmarks-public.js?ver=3.2.4.2"></script>

<div class="shr-bookmarks shr-bookmarks-bg-shr">
<ul class="socials">
		<li class="shr-facebook">
			<a href="http://www.facebook.com/share.php?v=4&amp;src=bm&amp;u=<?=$url; ?>" rel="nofollow" class="external" title="Bunu paylaş:Facebook" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=436'); return false;">&nbsp;</a>
		</li>
		<li class="shr-twitter">
			<a href="http://twitter.com/home?status=<?=$adi; ?>+1.0.2+%C4%B0ndir+-+http://b2l.me/ankhmb&amp;source=shareaholic" rel="nofollow" class="external" title="Bunu Tweet'le!">&nbsp;</a>
		</li>
		<li class="shr-digg">

			<a href="http://digg.com/submit?phase=2&amp;url=<?=$url; ?>&amp;title=<?=$adi; ?>+1.0.2+%C4%B0ndir" rel="nofollow" class="external" title="Bunu Digg'le!">&nbsp;</a>
		</li>
		<li class="shr-delicious">
			<a href="http://delicious.com/post?url=<?=$url; ?>&amp;title=<?=$adi; ?>+1.0.2+%C4%B0ndir" rel="nofollow" class="external" title="Bunu paylaş:del.icio.us">&nbsp;</a>
		</li>
		<li class="shr-friendfeed">
			<a href="http://www.friendfeed.com/share?title=<?=$adi; ?>+1.0.2+%C4%B0ndir&amp;link=<?=$url; ?>" rel="nofollow" class="external" title="Bunu paylaş:FriendFeed">&nbsp;</a>
		</li>
		<li class="shr-googlebookmarks">

			<a href="http://www.google.com/bookmarks/mark?op=add&amp;bkmk=<?=$url; ?>&amp;title=<?=$adi; ?>+1.0.2+%C4%B0ndir" rel="nofollow" class="external" title="Bunu ekle:Google Bookmarks">&nbsp;</a>
		</li>
		<li class="shr-yahoomail">
			<a href="http://compose.mail.yahoo.com/?Subject=<?=$adi; ?>+1.0.2+%C4%B0ndir&amp;body=Link: <?=$url; ?> (shareaholic aracılığıyla)%0D%0A%0D%0A----%0D%0A <?=$adi; ?>%20Nedir%3F%20<?=$adi; ?>%20Nas%C4%B1l%20Oynan%C4%B1r%3F%0D%0A<?=$adi; ?>%2C%20eski%20ad%C4%B1yla%20ActionCube%2C%20first-person-shooter%20t%C3%BCr%C3%BCndeki%20me%C5%9Fhur%20oyunlardan%20Cube%20temelli%2C%20Counter%20Strike%20benzeri%20%C3%BCcretsiz%20bir%20oyun.%0D%0A%0D%0AOyunun%20boyutu%20%C3%A7ok%20ufak%20fakat%20grafikler%20ve%20%C3%B6zellikler%20tatminkar.%20Online%20sunuculara%20ba%C4%9Fl%C4%B1%20olarak%20mu" rel="nofollow" class="external" title="Bunu e-postala:Yahoo! Mail">&nbsp;</a>
		</li>
		<li class="shr-mail">
			<a href="mailto:?subject=%22<?=$adi; ?>%201.0.2%20%C4%B0ndir%22&amp;body=Link: <?=$url; ?> (shareaholic aracılığıyla)%0D%0A%0D%0A----%0D%0A <?=$adi; ?>%20Nedir%3F%20<?=$adi; ?>%20Nas%C4%B1l%20Oynan%C4%B1r%3F%0D%0A<?=$adi; ?>%2C%20eski%20ad%C4%B1yla%20ActionCube%2C%20first-person-shooter%20t%C3%BCr%C3%BCndeki%20me%C5%9Fhur%20oyunlardan%20Cube%20temelli%2C%20Counter%20Strike%20benzeri%20%C3%BCcretsiz%20bir%20oyun.%0D%0A%0D%0AOyunun%20boyutu%20%C3%A7ok%20ufak%20fakat%20grafikler%20ve%20%C3%B6zellikler%20tatminkar.%20Online%20sunuculara%20ba%C4%9Fl%C4%B1%20olarak%20mu" rel="nofollow" class="external" title="Bunu bir arkadaşa e-postala">&nbsp;</a>
		</li>
</ul>

<div style="clear:both;"></div>
</div>



   			</div>

  <tr>
    <td colspan="3" style="border-top: solid 1px #cccccc;"><b>Powered by <a href="http://scriptkuyusu.6te.net" >TroypcDesign</a> - Version 1.0</b></td>
  </tr>
</table>

</html>