<?php

use Sunra\PhpSimple\HtmlDomParser;
$url = "http://www.selcuk.edu.tr/muhendislik/bilgisayar/Web/Sayfa/Ayrinti/4642/tr";
$html = HtmlDomParser::str_get_html(file_get_contents($url));

echo $html->find("span#ContentPlaceHolder1_lblIcerik", 0);
