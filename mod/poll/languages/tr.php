<?php

 $turkish = array(

	/**
	 * Menu items and titles
	 */
	'poll' => "Anketler",
	'poll:add' => "Yeni anket",
	'poll:group_poll' => "grup anketleri",
	'poll:group_poll:listing:title' => "%s'ın anketleri",
	'poll:your' => "Anketleriniz",
	'poll:not_me' => "%s'ın anketleri",
	'poll:friends' => "Arkadaşlarının anketleri",
	'poll:addpost' => "Bir anket oluştur",
	'poll:editpost' => "Bir anket düzenleyin: %s",
	'poll:edit' => "Bir anket düzenleme",
	'item:object:poll' => 'Anketler',
	'item:object:poll_choice' => "Anket seçenekleri",
	'poll:question' => "Anket Sorusu",
	'poll:description' => "Açıklama (isteğe bağlı)",
	'poll:responses' => "Oy seçenekleri",
	'poll:note_responses' => "Not: mevcut bir anketin seçeneklerini değiştirerek (ekleme, silme veya metni değiştirme), tüm üyelerin yeni seçim kümesine dayalı olarak tekrar oy vermesine ve oyların sıfırlanmasına neden olur",
	'poll:result:label' => "%s (%s)",
	'poll:show_results' => "Sonuçları göster",
	'poll:show_poll' => "Anketi göster",
	'poll:add_choice' => "Oy seçimi ekleyin",
	'poll:delete_choice' => "Bu seçimi sil",
	'poll:close_date' => "Anket kapanış tarihi (isteğe bağlı)",
	'poll:voting_ended' => "Bu ankette oy kullanma% s tarihinde bitti.",
	'poll:poll_closing_date' => "(Anket kapanış tarihi:% s)",
	'poll:poll_reset' => "Anketi sıfırla",
	'poll:poll_reset_description' => "Bu seçenekle anketi sıfırlayabilir ve tüm oyları silebilirsiniz.",
	'poll:poll_reset_confirmation' => "Bu anketi sıfırlamak ve tüm oyları silmek istediğinizden emin misiniz? ",

	'poll:convert:description' => 'DİKKAT: %s var olan mevcut anketlerde hala eski oy seçenekleri veri yapısına sahip olduğu bulundu. Bu anketler, anket eklentisinin bu sürümü üzerinde doğru çalışmıyor.',
	'poll:convert' => 'Mevcut anketleri şimdi güncelle',
	'poll:convert:confirm' => 'Güncelleme geri döndürülemez. Oy seçimindeki seçim yapısını veri yapısına dönüştürmek istediğinizden emin misiniz?',

	'poll:settings:notification_on_vote:title' => "Bir ankette yapılan oylamayla ilgili bir anketi yaratıcıya bildirilsin mi?",
	'poll:settings:notification_on_vote:desc' => "(Oluşturan, kullanıcıya özel, site çapındaki bildirim ayarlarına (ör. E-posta bildirimleri ve / veya site bildirimleri) veya hiçbirine bağlı olarak bildirim alır)",
	'poll:settings:group:title' => "Grup anketlerine izin verilsin mi?",
	'poll:settings:group_poll_default' => "Evet, varsayılan olarak açık",
	'poll:settings:group_poll_not_default' => "Evet, varsayılan olarak kapalı",
	'poll:settings:no' => "Hayır",
	'poll:settings:group_access:title' => "Grup anketleri etkinleştirilirse anketleri kim hazırlayabilsin?",
	'poll:settings:group_access:admins' => "Yalnızca grup sahipleri ve yöneticileri",
	'poll:settings:group_access:members' => "Herhangi bir grup üyesi",
	'poll:settings:front_page:title' => "Yöneticiler, 'günün anketi' olarak tek seferde bir anket yapabilsin mi?",
	'poll:settings:front_page:desc' => "(İlgili bileşeni dizin sayfasına eklemek için Bileşen yöneticisi eklentisi gereklidir)",
	'poll:settings:allow_close_date:title' => "Anketler için bir kapanış tarihi belirlemeye izin verilsin mi?",
	'poll:settings:allow_close_date:desc' => "(Daha sonra sonuçlar yine de izlenebiliyor ancak oy vermeye artık izin verilmiyor)",
	'poll:settings:allow_open_poll:title' => "Açık anketlere izin verilsin mi?",
	'poll:settings:allow_open_poll:desc' => "(Açık anketler, hangi kullanıcının anket seçiminde oy kullandığını gösterir; eğer bu seçenek etkinleştirilirse, yöneticiler ankette kimlerin oy verdiğini görebilir)",
	'poll:settings:allow_poll_reset:title' => "Anket sahiplerinin sandıklarında oyları sıfırlamalarına izin verilsin mi?",
	'poll:settings:allow_poll_reset:desc' => "(Bu seçeneğin etkinleştirilmesi, bir anketteki tüm oyları sıfırlamaya izin verecek oy sahası sahiplerine ve yöneticilere görünecek bir başlık bölümü düğmesi ekler; bu seçenekle engellenen yöneticiler yine de oyları sıfırlayabilir)",
	'poll:settings:multiple_answer_polls:title' => "Çoklu cevap anketlerine izin verilsin mi?",
	'poll:settings:multiple_answer_polls:desc' => "(Bu anketlerde üyeler oylamada birden fazla anket seçebilirler. Mümkün olan en fazla seçenek anketin yaratıcısı tarafından ayarlanabilir.) Anketler zaten oluşturulduktan sonra çoklu cevap anketlerini kapatırsanız, Anket seçimlerinde değişiklik yapılmadığı sürece bu anketlerde izin verilen seçenek sayısı değiştirilmez.Ancak anket seçimleri değiştirilirse, değiştirme anında birden fazla yanıt verilmezse izin verilen maksimum seçenek sayısı 1'e resetlenir)",
	'poll:none' => "Anket yok.",
	'poll:not_found' => "Anket bulunamadı.",
	'poll:permission_error' => "Bu anketi düzenleme izniniz yok.",
	'poll:vote' => "Oy",
	'poll:login' => "Bu ankette oy kullanmak isterseniz lütfen giriş yapınız.",
	'group:poll:empty' => "Anket yok",
	'poll:settings:site_access:title' => "Site çapında anketleri kimler yaratabilir?",
	'poll:settings:site_access:admins' => "Sadece yöneticiler",
	'poll:settings:site_access:all' => "Herhangi bir oturum açmış kullanıcı",
	'poll:can_not_create' => "Anketler oluşturmak için izniniz yok.",
	'poll:front_page_label' => "Bu anketi sitenin yeni \ Günün Anketi \ yapın",
	'poll:open_poll_label' => "Üyelerin hangi seçim için oy kullandıklarını gösterin (açık anket)",
	'poll:show_voters' => "Seçmenleri göster",
	'poll:max_votes:label' => "Katılımcı başına seçime birden fazla seçenek kadar izin ver",
	'poll:max_votes:desc' => "Birden büyük bir sayı girerseniz, anket, katılımcıların, burada girilen maksimum sayıya kadar oylarıyla birden çok anket seçmesine olanak tanıyan çoklu yanıt anketi haline gelecektir. Toplam anket seçimlerinden daha büyük bir sayı giremezsiniz.",
	'poll:max_votes:exceeded' => "Seçilebilir maksimum anket seçim sayısı toplam anket seçim sayısını aşamaz.",
	'poll:max_votes:info' => "Oylamada azami %s kadar birden fazla anket seçebilirsiniz.",
	'poll:max_votes:not_allowed_hint' => "DİKKAT: Bu anket oluşturulduğunda, site yöneticisi çoklu yanıt anketlerinin oluşturulmasına izin verdi, ancak bu özellik şu anda artık etkin değil. Şimdilik, bu anket seçmenlerin oyda% s kadar oy seçeneği seçmesine izin verir ve bu oy pusulası seçeneklerini değiştirmedikçe bu sayı değişmez. Ancak, anket seçeneklerini değiştirirseniz, oylamada seçilebilecek maksimum seçenek sayısı 1'e sıfırlanacaktır.",

	/**
	 * Poll widget
	 **/
	'poll:latest_widget_title' => "En yeni topluluk anketleri",
	'poll:latest_widget_description' => "En son yapılan anketleri görüntüler.",
	'poll:latestgroup_widget_title' => "Son grup anketleri",
	'poll:latestgroup_widget_description' => "En son yapılan grup anketlerini görüntüler.",
	'poll:my_widget_title' => "Anketlerim",
	'poll:my_widget_description' => "Bu widget sandıklarınızı görüntüleyecek.",
	'poll:widget:label:displaynum' => "Kaç anketi görüntülemek istiyorsunuz?",
	'poll:individual' => "Günün anketi",
	'poll_individual:widget:description' => "Sitenin mevcut \  Günün anını \   görüntüleyin.",
	'poll:widget:no_poll' => "%s adlı kullanıcının yoklamaları yok.",
	'poll:widget:nonefound' => "Anket yok.",
	'poll:widget:think' => "%s ne düşündüğünü bildireceğim!",
	'poll:enable_poll' => "Anketleri etkinleştir",
	'poll:noun_response' => "oy",
	'poll:noun_responses' => "oylar",
	'poll:settings:yes' => "evet",
	'poll:settings:no' => "hayır",

	'poll:month:01' => 'ocak',
	'poll:month:02' => 'subat',
	'poll:month:03' => 'mart',
	'poll:month:04' => 'nisan',
	'poll:month:05' => 'mayıs',
	'poll:month:06' => 'haziran',
	'poll:month:07' => 'temmuz',
	'poll:month:08' => 'agustos',
	'poll:month:09' => 'eylül',
	'poll:month:10' => 'ekim',
	'poll:month:11' => 'kasım',
	'poll:month:12' => 'aralık',

	/**
	 * Notifications
	 **/
	'poll:new' => 'Yeni bir anket',
	'poll:notify:summary' => '%s adlı yeni anket',
	'poll:notify:subject' => 'Yeni anket: %s',
	'poll:notify:body' =>
'
%s yeni bir anket yarattı:

%s

Oyunuzu görüntüleyin ve oy hakkında oy verin:
%s
',
	'poll:notification_on_vote:subject' => "Ankette yeni oy",
	'poll:notification_on_vote:body' => "%s,\n\nanketinizde yeni bir oy var \"%s\".\n\nAnket sonuçlarını şu adresten görebilirsiniz: \n\n%s\n",

	/**
	 * Poll river
	 **/
	'poll:settings:create_in_river:title' => "aktivite akısında anket olusturuldu gönderisi gösterilsinmi?",
	'poll:settings:vote_in_river:title' => "anket oylamaları aktivite akışında gösterilsinmi?",
	'poll:settings:send_notification:title' => "Bir anket oluşturulduğunda bildirim gönder?",
	'poll:settings:send_notification:desc' => "(Üyeler, yalnızca anketin yaratıcısı veya anket eklendiği grubun bir üyesiyle arkadaş oldukları takdirde bildirim alırlar. Ayrıca bildirimler yalnızca sitenin bildirim ayarlarını yapılandıran üyelere de gönderilir)",
	'river:create:object:poll' => '%s bir anket oluşturdu %s',
	'river:update:object:poll' => '%s Bir anket güncellendi %s',
	'river:vote:object:poll' => '%s Ankette oy kullandı %s',
	'river:comment:object:poll' => '%s Ankette yorum yaptı %s',

	/**
	 * Status messages
	 */
	'poll:added' => "Anketiniz oluşturuldu.",
	'poll:edited' => "Anket kaydedildi.",
	'poll:responded' => "Yanıtladığınız için teşekkür ederim, oylama kaydedildi.",
	'poll:deleted' => "Anket başarıyla silindi.",
	'poll:totalvotes' => "Toplam oy sayısı: %s",
	'poll:voted' => "Bu anket için oyunuz atıldı. Bu ankette oy verdiğiniz için teşekkür ederiz.",
	'poll:poll_reset_success' => "Anket başarıyla sıfırlandı.",
	'poll:upgrade' => 'Sürüm güncelle',
	'poll:upgrade:success' => 'Anket eklentisinin yükseltilmesi başarılı oldu.',

	/**
	 * Error messages
	 */
	'poll:blank' => "Maalesef, anketi oluşturmadan önce her iki soruyu da doldurmanız ve en az bir oy seçimi yapmanız gerekir.",
	'poll:novote' => "Maalesef, bu ankette oy kullanacak bir seçenek seçmeniz gerekiyor.",
	'poll:alreadyvoted' => "Maalesef, yalnızca bir kez oy kullanabilirsiniz.",
	'poll:notfound' => "Maalesef, belirtilen anketi bulamadık.",
	'poll:notdeleted' => "Maalesef bu anket silinemedi.",
	'poll:poll_reset_denied' => "Maalesef, bu anketi sıfırlamak için yeterli izniniz yok.",
	'poll:error' => "Üzgünüz: anket kaydetilmedi, bilinmeyen bir hata nedeniyle başarısız oldu.",
	'poll:choice_number_mismatch' => "Üzgünüm: anket kaydetme başarısız oldu, çünkü kaydedilecek olan anket seçim sayısının uyuşmaması ve beklenen toplam anket seçimi sayısı veya anket seçimlerinin en az birinde hiç metin yok.",
);
add_translation('tr', $turkish);