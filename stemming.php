<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Pencarian Kata Dasar</title>
	<link rel="shortcut icon" href="images/dreamcatcher.png"/>
</head>
<body><p>
<body background="images/dreamcatcher-background-002.jpg">
</p>
<p align="center"><b>PENCARIAN KATA DASAR</b></p>
<form method="post" action="">
<table width="200" border="0" align="center">
  <tr>
    <td><input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>"></td>
    <td><input class="btnForm" type="submit" name="submit" value="Cari"/></td>
  </tr>
  <tr>
    <td colspan="2"><?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?></td>
  </tr>
</table>
</form>
</body>
<body><br>
<form action="index.php" method="get">
<center><input class="btnForm" type="submit" name="submit" value="Kembali"/></center>
</form>
</body>
</html>