<?php
	require_once('sTextToSound.php');

	if (!class_exists('sTextToSound')) {
		die('sTextToSound class not found');
	}

	$sClass = new sTextToSound;
	$sClass->dir="mp3"; // mp3 dosyaların oluşturulacağı dizin adı
	$sClass->lang="tr"; // seslerde kullanılacak dil'i seçiniz // default ( ingilizce ) en // tr diyerek Türkçe yaptık.
	$sClass->cache=true; // cache ( ön belleklemeyi ) aktif etmek için true diyiniz default olarak false 

	/*
	* İkinci parametrede ülkenin alan adı uzantısınız giriniz ingilizce için ( en )
	*/

	if ($_POST) {
			$sClass->sound($_POST['text']);
	}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example Page</title>
	<style>
	a {
			color: #4183c4;
			text-decoration: none
		
		}</style>
</head>
<body>

<form action="" method="POST">
	<label>Yazı</label>
	<br/>
	<textarea name="text" id="" cols="30" rows="10"></textarea>
	<br/>
	<button>Yazıyı Çevir </button>
</form>



<?php

	if ($_POST) {
	
	echo "<h5>mp3 dosya adresiniz : ".$sClass->output;
              

	}
?>
<hr/>
<h5>Example Page 
@Author <a href="http://savascanaltun.com.tr">Savaş Can ALTUN</a> - <a href="mailto:savascanaltun@gmail.com">Mail</a> - <a href="http://github.com/saltun">Github</a>
</h5>
</body>
</html>