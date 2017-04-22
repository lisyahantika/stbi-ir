<html>
<head>
	<title>Form Panjang Query</title>
	<link rel="shortcut icon" href="images/dreamcatcher.png"/>
</head>
<body>
<p>
<body background="images/dreamcatcher-background-002.jpg">
</body>
</p>
<?php
  $konek = mysqli_connect("localhost","root","","dbstbi");

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpan.php?file=$r[nama_file]\">Download File</a><hr><br>";
  }
?>
</body>
</html>