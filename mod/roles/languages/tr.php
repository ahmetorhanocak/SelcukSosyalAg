<?php
/**
 * Elgg roles plugin language pack
 *
 * @package ElggRoles
 */

$turkish = array(
	
	'item:object:role' => 'Roller',

	'user:set:role' => 'Rol ayarları',
	
	'roles:role:VISITOR_ROLE' => 'Ziyaretçi',
	'roles:role:DEFAULT_ROLE' => 'Üye',
	'roles:role:ADMIN_ROLE' => 'Yönetici',
	'roles:role:NO_ROLE' => 'Spesifik bir rol yok',

	'user:role:label' => 'Rolü seç',

	'user:role:success' => 'Kullanıcı rolü başarıyla güncellendi',
	'user:role:fail' => 'Kullanıcı rolü güncellenemedi. Lütfen daha sonra tekrar deneyiniz.',
	
	'roles:page:denied' => 'Maalesef, ancak o sayfayı görüntülemek için gerekli yetkilere sahip değilsiniz.',
	'roles:action:denied' => 'Maalesef, ancak bu işlemi gerçekleştirmek için gerekli ayrıcalıklara sahip değilsiniz.',

	'roles:settings:automatic_reset' => 'Otomatik sıfırlama',
	'roles:settings:automatic_reset:help' => 'Eklenti devre dışı bırakıldığında tüm rolleri sil',
);

add_translation("tr", $turkish);
