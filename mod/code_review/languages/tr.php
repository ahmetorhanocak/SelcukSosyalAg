<?php
$turkish = array(
	'admin:code' => 'Kod',
	'admin:code:diagnostic' => 'Kod teşhis',
	'admin:code:diagnostic:deprecated_list' => 'Kullanımdan kaldırılan işlevler listesi',
	'admin:code:diagnostic:functions_list' => 'Tanımlanmış fonksiyonlar',
	'admin:code:diagnostic:private_list' => 'Özel fonksiyonlar listesi',
	'code_review:menu' => 'Menü',

	'code_review:deprecated_list:title' => '%s sürümünden itibaren kullanımdan kaldırıldı',
	'code_review:deprecated_list:name' => 'İsim',
	'code_review:deprecated_list:remarks' => 'Uyarılar',
	'code_review:deprecated_list:solution' => 'Çözüm',
	'code_review:deprecated_list:file_line' => '%s dosyası %d satırında',

	'code_review:private_list:title' => 'Özel fonksiyonlar',
	'code_review:private_list:name' => 'İsim',
	'code_review:private_list:file_line' => '%s dosyası %d satırında',
	'code_review:private_list:reason' => 'Özel olmansının sebebi',
	'code_review:private_list:reason:private' => 'Özel olarak işaretlendi',
	'code_review:private_list:reason:not_documented' => 'Belgelendirilmemiş',

	'code_review:functions_list:name' => 'İsim',
	'code_review:functions_list:file' => 'Tanım dosyası',
	'code_review:functions_list:line' => 'Satır',

	'code_review:functions_list:title' => '%s içinde tanımlanan fonksiyonlar',

	'code_review:solution:basic_replace_with' => '%s ile basit değiştirme',

	'code_review:form' => 'Seçenekler',
	'code_review:results' => 'Sonuçlar',
	'code_review:results:initial_stub' => 'Analiz yapmak için seçeneklerden birini seçin ve yukarıdaki formu gönderin. Ciddi zaman alabilir, lütfen sabırlı olun.',
	'code_review:error:request' => 'İstek sırasında bir sorun oluştu',
	'code_review:subpath' => 'Alt dizini analiz etmek için',
	'code_review:subpath:placeholder' => '(kurulumun kökü)',
	'code_review:version' => 'Analiz etmek için maksimum sürüm',
	'code_review:disabled_plugins_only' => 'Devre dışı bırakılmış eklentileri dahil et',
	'code_review:find_deprecated_functions' => 'Kullanımdan kaldırılmış fonksiyonların kullanımını arama',
	'code_review:find_private_functions' => 'Özel fonksiyonların kullanımını arama',
	'code_review:fix_problems' => 'Sorunları düzeltmeye çalışın',
	'code_review:fix_problems:warning:header' => 'Uyarı! Bunu dikkatlice okuyun',
	'code_review:fix_problems:warning' => 'Kod analizörü, karşılaştığı sorunu çözmeye çalışacaktır. Değişiklikler geri döndürülemez ve önceki sürümlerle uyumluluk garanti etmez.
Kodun yedeklemesine sahip olduğunuzdan emin olun. Bu özelliği kullanmak, tüm kurulum dizinine yazma erişimi gerektirir. AKTİF SİTEDE KULLANMAYIN!',
	'code_review:js:confirm_changes' => 'AKaynak kodunu değiştirmek istediğinizden emin misiniz? Bu, tekrar değerlendirmen için son şans!',

);
add_translation('tr', $result);//let's be nice for 1.8 users
// return $result;//1.9 standard