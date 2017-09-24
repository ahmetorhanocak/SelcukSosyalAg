<?php
	$url = "https://www.selcuk.edu.tr/muhendislik/bilgisayar/Web/Sayfa/Ayrinti/4642/tr";
	$contents = file_get_contents($url);
	$str = "Öğrenci E-Posta";
	$str2 = "DUYURU ARŞİVİ";

	$contents = strstr($contents , $str, $before_str = false);
	$contents = strstr($contents , "Duyurular", $before_str = false);
	$duyuru =  strstr($contents , $str2, $before_str2 = true);
	$str3 = "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><body><div class=\"w3-container w3-teal\"></div><div class=\"w3-container\">";
	$str4 = "</div>";

	echo str_replace('Duyurular', '<h2>Selçuk Üniversitesi Bilgisayar Mühendisliği</h2><br>', $str3.$duyuru.$str4);
?>