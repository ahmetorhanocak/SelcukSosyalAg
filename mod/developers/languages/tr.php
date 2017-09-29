<?php
return array(
	// menu
	'admin:develop_tools' => 'Araçlar',
	'admin:develop_tools:sandbox' => 'Tema havuzu',
	'admin:develop_tools:inspect' => 'Denetle',
	'admin:inspect' => 'Denetle',
	'admin:develop_tools:unit_tests' => 'Birim Testleri',
	'admin:develop_tools:entity_explorer' => 'Kurulum Sihirbazı',
	'admin:developers' => 'Geliştiriciler',
	'admin:developers:settings' => 'Ayarlar',

	// settings
	'elgg_dev_tools:settings:explanation' => 'Aşağıdaki geliştirme ve hata ayıklama ayarlarınızı denetleyin. Bu ayarlardan bazıları diğer yönetim sayfalarında da mevcuttur.',
	'developers:label:simple_cache' => 'Basit önbellek kullan',
	'developers:help:simple_cache' => 'Geliştirirken bu önbelleği kapatın. Aksi takdirde, CSS ve JavaScript\'deki değişiklikler yoksayılır.',
	'developers:label:system_cache' => 'Sistem önbelleğini kullan',
	'developers:help:system_cache' => 'Geliştirirken kapatın. Aksi takdirde eklentilerinizdeki değişiklikler kaydedilmeyecektir.',
	'developers:label:debug_level' => "İz düzeyi",
	'developers:help:debug_level' => "Kaydedilen bilgilerin miktarını kontrol eder. Daha fazla bilgi için elgg_log() konusuna bakın.",
	'developers:label:display_errors' => 'Ölümcül PHP hatalarını göster',
	'developers:help:display_errors' => "Varsayılan olarak, Elgg .htaccess dosyası, ölümcül hataların görüntülenmesini engelliyor.",
	'developers:label:screen_log' => "Ekrana giriş yapın",
	'developers:help:screen_log' => "Bu elgg_log() ve elgg_dump() çıktılarını ve DB sorgu sayısını görüntüler.",
	'developers:label:show_strings' => "Ham çeviri dizelerini göster",
	'developers:help:show_strings' => "Bu, elgg_echo() tarafından kullanılan çeviri dizelerini görüntüler.",
	'developers:label:show_modules' => "Konsoldan yüklenen AMD modüllerini göster",
	'developers:help:show_modules' => "Akışlar, modülleri ve değerleri JavaScript konsoluna yükledi.",
	'developers:label:wrap_views' => "Görüntülemeleri sar",
	'developers:help:wrap_views' => "HTML içeren hemen hemen her yorumu kapsar. Belirli HTML oluşturan görünümü bulmak için kullanışlıdır.
Bu, varsayılandaki HTML olmayan görünümleri bozabilir. Ayrıntılar için developers_wrap_views() bölümüne bakın.",
	'developers:label:log_events' => "Olayları ve eklenti kancalarını günlüğe kaydet",
	'developers:help:log_events' => "Günlüklere olayları ve eklenti kancalarını yazın. Uyarı: Her sayfalada bolca var.",
	'developers:label:show_gear' => "%s aracını yönetici alanı dışında kullanın",
	'developers:help:show_gear' => "Görünüm alanının sağ alt köşesinde, yöneticilerin geliştirici ayarlarına ve bağlantılara erişmesine izin veren bir simge.",
	'developers:label:submit' => "Kaydet ve önbelleği temizle",

	'developers:debug:off' => 'Kapalı',
	'developers:debug:error' => 'Hata',
	'developers:debug:warning' => 'Uyarı',
	'developers:debug:notice' => 'Bildirim',
	'developers:debug:info' => 'Bilgi',
	
	// entity explorer
	'developers:entity_explorer:help' => 'Varlıklar hakkında bilgileri görüntüleyin ve onlarla ilgili bazı temel eylemler gerçekleştirin.',
	'developers:entity_explorer:guid:label' => 'İncelenecek varlığın kılavuzunu girin',
	'developers:entity_explorer:info' => 'Kurulum bilgisi',
	'developers:entity_explorer:info:attributes' => 'Nitelikler',
	'developers:entity_explorer:info:metadata' => 'Meta veria',
	'developers:entity_explorer:info:relationships' => 'İlişkiler',
	'developers:entity_explorer:info:private_settings' => 'Özel Ayarlar',
	'developers:entity_explorer:delete_entity' => 'Bu öğeyi kaldır',
	
	// inspection
	'developers:inspect:help' => 'Elgg çerçevesinin konfigürasyonunu inceleyin.',
	'developers:inspect:actions' => 'Eylemler',
	'developers:inspect:events' => 'Olaylar',
	'developers:inspect:menus' => 'Menüler',
	'developers:inspect:pluginhooks' => 'Eklenti kancaları',
	'developers:inspect:priority' => 'Öncelik',
	'developers:inspect:simplecache' => 'Basit Önbellek',
	'developers:inspect:views' => 'Görünümler',
	'developers:inspect:views:all_filtered' => "<b> Not! </ b> Tüm görünüm giriş / çıkışları bu Eklenti Kancaları aracılığıyla filtrelenir:",
	'developers:inspect:views:input_filtered' => "(giriş eklenti kancasıyla filtrelendi: %s)",
	'developers:inspect:views:filtered' => "(eklenti kancasıyla filtrelendi: %s)",
	'developers:inspect:widgets' => 'Bileşenler',
	'developers:inspect:webservices' => 'Web servisleri',
	'developers:inspect:widgets:context' => 'Bağlam',
	'developers:inspect:functions' => 'Fonksiyonlar',
	'developers:inspect:file_location' => 'Elgg kökünden dosya yolu',

	// event logging
	'developers:request_stats' => "Talep İstatistikleri (kapatmaları içermez)",
	'developers:event_log_msg' => "%s: '%s, %s' %s içinde",
	'developers:log_queries' => "DB sorguları: %s",
	'developers:boot_cache_rebuilt' => "Bu istek için önyükleme önbelleği yeniden oluşturuldu",
	'developers:elapsed_time' => "Geçen zaman",

	// theme sandbox
	'theme_sandbox:intro' => 'Giriş',
	'theme_sandbox:breakout' => 'Iframe\'den ayrıl',
	'theme_sandbox:buttons' => 'Düğmeler',
	'theme_sandbox:components' => 'Bileşenler',
	'theme_sandbox:forms' => 'Formlar',
	'theme_sandbox:grid' => 'Örgü',
	'theme_sandbox:icons' => 'Simgeler',
	'theme_sandbox:javascript' => 'JavaScript',
	'theme_sandbox:layouts' => 'Tasarımlar',
	'theme_sandbox:modules' => 'Modüller',
	'theme_sandbox:navigation' => 'Navigasyon',
	'theme_sandbox:typography' => 'Tipograf',

	'theme_sandbox:icons:blurb' => 'Simgeleri görüntülemek için <em> elgg_view_icon ($name) </ em> kullanın.',

	// unit tests
	'developers:unit_tests:description' => 'Elgg  çekirdek sınıflarında ve işlevlerinde hata tespiti için birim ve entegrasyon testlerine sahiptir.',
	'developers:unit_tests:warning' => 'Uyarı: Bu Testleri Aktif Sitede Çalıştırmayın. Veritabanınızı bozabilir.',
	'developers:unit_tests:run' => 'Çalıştır',

	// status messages
	'developers:settings:success' => 'Ayarlar kaydedildi ve önbellekler boşaltıldı',

	'developers:amd' => 'AMD',
);
