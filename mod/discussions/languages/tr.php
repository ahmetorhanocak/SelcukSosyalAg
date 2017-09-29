<?php

return array(
	'discussion' => 'Tartışmalar',
	'discussion:add' => 'Tartışma konusunu ekle',
	'discussion:latest' => 'Son tartışmalar',
	'discussion:group' => 'Grup tartışmaları',
	'discussion:none' => 'Tartışma yok',
	'discussion:reply:title' => '%s cevapla',
	'discussion:new' => "Tartışma mesajı ekleyin",
	'discussion:updated' => "Son cevap %s %s",

	'discussion:topic:created' => 'Tartışma konusu oluşturuldu.',
	'discussion:topic:updated' => 'Tartışma konusu güncellendi.',
	'discussion:topic:deleted' => 'Tartışma konusu silindi.',

	'discussion:topic:notfound' => 'Tartışma konusu bulunamadı',
	'discussion:error:notsaved' => 'Bu konu kaydedilemedi',
	'discussion:error:missing' => 'Hem başlık hem de mesaj zorunlu alanlardır',
	'discussion:error:permissions' => 'Bu işlemi gerçekleştirecek izinlere sahip değilsiniz',
	'discussion:error:notdeleted' => 'Tartışma konusu silinemedi',

	'discussion:reply:edit' => 'Cevabı düzenle',
	'discussion:reply:deleted' => 'Tartışma yanıtı silindi.',
	'discussion:reply:error:notfound' => 'Tartışma yanıtı bulunamadı',
	'discussion:reply:error:notfound_fallback' => "Üzgünüz, belirtilen yanıtı bulamadık, ancak sizi orijinal tartışma konusuna yönlendirdik.",
	'discussion:reply:error:notdeleted' => 'Tartışma yanıtını silinemedi',

	'discussion:search:title' => 'Konuya cevap yaz: %s',

	/**
	 * Action messages
	 */
	'discussion:reply:missing' => 'Boş bir cevap gönderemezsin',
	'discussion:reply:topic_not_found' => 'Tartışma konusu bulunamadı',
	'discussion:reply:error:cannot_edit' => 'Bu cevabı düzenlemek için izniniz yok',
	'discussion:reply:error:permissions' => 'Bu konuyu cevaplama yetkiniz yok',

	/**
	 * River
	 */
	'river:create:object:discussion' => '%s yeni bir tartışma konusu %s ekledi',
	'river:reply:object:discussion' => '%s, %s tartışma konusunu yanıtladı',
	'river:reply:view' => 'cevabı görüntüle',

	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => '%s adlı yeni tartışma konusu',
	'discussion:topic:notify:subject' => 'Yeni tartışma konusu: %s',
	'discussion:topic:notify:body' =>
'%s yeni bir tartışma konusu ekledi "%s":

%s

Tartışma konusunu görüntüle ve cevapla:
%s
',

	'discussion:reply:notify:summary' => 'Konula yeni yanıt: %s',
	'discussion:reply:notify:subject' => 'Konula yeni yanıt: %s',
	'discussion:reply:notify:body' =>
'% s, "% s" tartışma konusunu yanıtladı:

%s

Tartışmayı görüntüle ve yanıtla::
%s
',

	'item:object:discussion' => "Tartışma konuları",
	'item:object:discussion_reply' => "Tartışma cevapları",

	'groups:enableforum' => 'Grup tartışmalarını etkinleştir',

	'reply:this' => 'Bunu cevapla',

	/**
	 * ecml
	 */
	'discussion:ecml:discussion' => 'Grup Tartışmaları',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => 'Konu durumu',
	'discussion:topic:closed:title' => 'Bu tartışma kapandı.',
	'discussion:topic:closed:desc' => 'Bu tartışma kapatıldı ve yeni yorumlar kabul edilmiyor.',

	'discussion:replies' => 'Cevaplar',
	'discussion:addtopic' => 'Başlık ekle',
	'discussion:post:success' => 'Cevabınız gönderildi',
	'discussion:post:failure' => 'Yanıtınızı gönderirken bir sorun oluştu',
	'discussion:topic:edit' => 'Konuyu düzenle',
	'discussion:topic:description' => 'Konu mesajı',

	'discussion:reply:edited' => "Forum yazısını düzenlediniz.",
	'discussion:reply:error' => "Forum mesajını düzenlerken bir sorun oluştu.",
);
