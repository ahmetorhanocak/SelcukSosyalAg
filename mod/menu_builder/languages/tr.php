<?php


$turkish = array(
	'menu_builder' => "Menü kurucu",

	// item
	'item:object:menu_builder_menu_item' => "Menü Kurucu Öğesi",
		
	// admin
	'menu_builder:admin:menü:list' => "Ayarlanabilir menüler",
	'menu_builder:admin:menü:add' => "Yeni menü",
	'menu_builder:admin:menü:add:internal_name' => "İç menü ismi",
	'menu_builder:admin:menü:placeholder' => "Bu bir yer tutucudur",

	// views
	// edit
	'menu_builder:edit_mode:add' => "Yeni bir menü öğesi eklemek için tıklayın",

	// add
	'menu_builder:add:form:url' => "URL",
	'menu_builder:add:form:target' => "Hedef",
	'menu_builder:add:form:target:self' => "Aynı pencere",
	'menu_builder:add:form:target:blank' => "Yeni",
	'menu_builder:add:form:parent' => "Üst menü öğesi",
	'menu_builder:add:form:access' => "Bu menü öğesini kimler görebilir?",
	'menu_builder:add:access:admin_only' => "Sadece yönetici",
	'menu_builder:add:action:tokens' => "Eylem",

	// import
	'menu_builder:import:title' => "Menü öğesini içe aktarma %s için",
	'menu_builder:import:warning' => "Bir site menüsünü içe aktarma, kalıcı ve geri döndürülemez olarak mevcut
menü yapılandırmasını kaldırır. Dikkatle devam edin! <br><br>
	İçe aktarmaya başladıktan sonra, başka bir sistemdeki sabit kodlu URL'ler eğer kullanılamıyorsa yanlış alana işaret ettiğinden olabilir bağlantıları kontrol edin.
	",
	'menu_builder:import:help' => "Dışa aktarılan bir menüden dosya yükle",

	// actions
	'menu_builder:actions:missing_name' => "Menü ismi eksik",
	
	'menu_builder:actions:edit:error:input' => "Bir menü öğesi oluşturmak/düzenlemek için yapılan girdi yanlış",
	'menu_builder:actions:edit:success' => "Menü öğesi başarıyla oluşturuldu/düzenlendi",

	'menu_builder:actions:delete:success' => "Menü öğesi başarıyla silindi",

	'menu_builder:actions:export:error:empty' => "Dışa aktarılacak hiçbir menü öğesi yok",

	'menu_builder:actions:import:error:upload' => "Dosya yüklenirken bir hata oluştu",
	'menu_builder:actions:import:error:invalid:content' => "Dosya içeriğinde bir hata oluştu",
	'menu_builder:actions:import:complete' => "Menü içe aktarma işlemi tamamlandı",

	// settings
	'menu_builder:settings:htmlawed:filter' => "Url'leri ve başlıkları htmlawed üzerinden filtrelemek ister misiniz?",
	'menu_builder:settings:regen_site_menu' => "Bu bağlantı ile site menüsünü yenilemeyi seçebilirsiniz. Bu, site menüsünde kayıtlı olan mevcut menü öğelerini geçersiz kılacaktır.",
	'menu_builder:settings:regen_site_menu:button' => "Şimdi yenile!",
);

add_translation('tr', $turkish);
