<?php

$turkish = array(
	'admin:administer_utilities:elggchat' => 'Sohbet',
	'elggchat' => "SelcukSohbet",
	'elggchat:chat:profile:invite' => "Sohbete davet et",
	'elggchat:chat:send' => "Gönder",

	'elggchat:friendspicker:info' => "Çevirimiçi",
	'elggchat:friendspicker:online' => "Çevirimiçi",
	'elggchat:friendspicker:offline' => "Çevirimdışı",
	'elggchat:friendspicker:nofriends' => "Şu anda hiç yok",

	'elggchat:chat:invite' => "Davet et",
	'elggchat:chat:leave' => "Ayrıl",
	'elggchat:chat:leave:confirm' => "Bu sohbetten ayrılmak istediğine emin misin?",

	'elggchat:action:invite' => "<b>%s</b> ,<b>%s</b> kullanıcısını davet etti",
	'elggchat:action:leave' => "<b>%s</b> sohbetten ayrıldı",
	'elggchat:action:join' => "<b>%s</b> sohbete katıldı",

	'elggchat:session:name:default' => "Sohbet oturumu (%s)",
	'elggchat:session:onlinestatus' => "Son hareket: %s",

	'elggchat:session_list_introduction' => 'Bu sayfada sitendeki şu an açık olan sohbet oturumlarının listesini görürsün. Bir oturumu \'Detaylar\' butonuyla daha detaylı görebilirsin ya da bir chat otrumunu \'Oturumu sil\' butonu ile silebilirsin.',
	'elggchat:session_details_introduction' => 'Bu sayfada Sohbet Oturumları listesinden seçmiş olduğun oturumun detaylarını görebilirsin. Bu sohbet oturumuna şu an kimin giriş yaptığını ve yollanan bütün sohbet iletilerini görebilirsin. Ayrıca bu sohbet oturumuna bir mesaj ekleyebilirsin. Bu mesaj sistem mesajı olarak ve \'[Adminden mesaj]\' şeklinde görülür.',
	'elggchat:admin_message' => '[Yöneticiden mesaj]: ',
	'elggchat:post_admin_message' => 'Bu sohbete mesaj ekle: ',
	'elggchat:post_admin_message_success' => 'Mesaj sohbete başarıyla yollandı.',
	'elggchat:post_admin_message_error' => 'Mesaj sohbete yollanamadı.',
	'elggchat:chatsession_delete' => 'Sohbeti sil',
	'elggchat:session_delete_success' => 'Sohbet silindi.',
	'elggchat:session_delete_error' => 'Sohbet silinemedi.',
	'elggchat:sessions_backbutton' => 'Sohbet listesine geri dön',
	'elggchat:session:no_session_details' => 'Sohbet yok ya da bir hata meydana geldi.',
	'elggchat:session:no_sessions' => "Şu an açık sohbet penceresi yok.",
	'elggchat:chatsession_deleteconfirm' => 'Bu sohbeti gerçekten kullanıcılara haber vermeden ve şu an silmek mi istiyor musun?',
	'elggchat:chatsession_details' => 'Detaylar',

	'elggchat:session:guid' => "Sohbet GUID: %s",
	'elggchat:session_details:guid' => "Sohbet detayları GUID ile %s",
	'elggchat:session:last_updated' => "Son güncelleme: ",
	'elggchat:session:chat_participants' => "Bu sohbetteki üyeler: ",
	'elggchat:session:no_participants' => "Şu an bu sohbet oturumunda üye yok.",
	'elggchat:session:number_chat_participants' => "Sohbetteki üye sayısı: ",
	'elggchat:session:session_messages' => "Bu sohbete yollanan mesajlar: ",
	'elggchat:session:no_messages' => "Henüz bu sohbete yollanan mesaj yok.",
	'elggchat:session:number_session_messages' => "Sohbet mesajları sayısı: ",

	'elggchat:crondone' => "Sohbet temizlendi\n",

	// Plugin settings
	'elggchat:admin:settings:hour' => "%s saat",
	'elggchat:admin:settings:hours' => "%s saat",
	'elggchat:admin:settings:days' => "%s gün",

	'elggchat:admin:settings:maxsessionage' => "Bir sohbetin temizlenmeden önce boşta kalabileceği maksimum süre",
	'elggchat:admin:settings:keepsessions' => "Sohbetler otomatik temizlenmesin. (admin manuel olarak silebilir)",

	'elggchat:admin:settings:chatupdateinterval' => "Sohbet penceresini yoklama aralığı",
	'elggchat:admin:settings:maxchatupdateinterval' => " Her 10 kontrol sonrasında değişiklik olmaması durumunda yoklama aralığı süresi çarpılır ta ki maksimum süreye ulaşana kadar. (saniye bazında)",
	'elggchat:admin:settings:enable_sounds' => "Yeni mesaj için bildirim sesi (sadece sohbet penceresi küçültülmüşken)",
	'elggchat:admin:settings:enable_flashing' => "Yeni mesaj geldiğinde pencerenin yanıp sönmesine izin ver (sadece sohbet pencere küçültülmüşken)",
	'elggchat:admin:settings:enable_smilies' => "Gülen yüz ifadesi kodlarını hareket eden küçük resimlere dönüştür",
	'elggchat:admin:settings:enable_extensions' => "Diğer plugin'ler tarafından eklenebilecek extention'lara izin ver.",

	'elggchat:admin:settings:online_status:active' => "Kullanıcının boşta durumuna geçmesi için gereken maksimum süre",
	'elggchat:admin:settings:online_status:inactive' => "Kullanıcının pasif durumuna geçmesi için gereken maksimum süre",

	// User settings
	'elggchat:usersettings' => 'Sohbet ayarları',
	'elggchat:usersettings:enable_chat' => "Sohbet araçlarına izin verilsin mi? ",
	'elggchat:usersettings:allow_contact_from' => "Benimle kimler sohbet edebilir? ",
	'elggchat:usersettings:allow_contact_from:all' => "Herkes benimle sohbet edebilir",
	'elggchat:usersettings:allow_contact_from:friends' => "Sadece arkadaşlarım benimle sohbet edebilir",
	'elggchat:usersettings:allow_contact_from:none' => "Kimse benimle sohbet edemez",
	'elggchat:usersettings:show_offline_user' => "Çevirimdışı üyeler gösterilsin mi? ",
	'elggchat:usersettings:save:success' => 'Sohbet ayarların başarıyla kaydedildi.',
	'elggchat:usersettings:save:error' => 'Sohbet ayarların kaydedilirken bir sorunla karşılaşıldı.',

	// Toolbar actions
	'elggchat:toolbar:minimize' => "Sohbet pencerisini küçült",
	'elggchat:toolbar:maximize' => "Sohbet penceresini büyült",
);

add_translation("tr", $turkish);