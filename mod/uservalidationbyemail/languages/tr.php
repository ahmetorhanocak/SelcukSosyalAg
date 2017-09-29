<?php
return array(
	'admin:users:unvalidated' => 'Doğrulanmamış',
	
	'email:validate:subject' => "%s lütfen %s için e-posta adresinizi doğrulayın!",
	'email:validate:body' => "%s,

%s kullanmaya başlamadan önce e-posta adresinizi doğrulamanız gerekir.

Lütfen aşağıdaki bağlantıya tıklayarak e-posta adresinizi onaylayın:

%s

Eğer bağlantıyı tıklayamazsanız, kopyalayıp elle tarayıcınıza yapıştırın.

%s
%s
",
	'email:confirm:success' => "E-posta adresinizi onayladınız!",
	'email:confirm:fail' => "E-posta adresiniz doğrulanamadı...",

	'uservalidationbyemail:emailsent' => "E-posta, <em>%s</em> adresine gönderildi",
	'uservalidationbyemail:registerok' => "Hesabınızı etkinleştirmek için, lütfen size yeni gönderdiğimiz bağlantıyı tıklatarak e-posta adresinizi onaylayın.",
	'uservalidationbyemail:login:fail' => "Hesabınız doğrulanmadığından giriş işlemi başarısız oldu. Başka bir doğrulama e-postası gönderildi.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'Doğrulanmamış kullanıcı yok.',

	'uservalidationbyemail:admin:unvalidated' => 'Doğrulanmamış',
	'uservalidationbyemail:admin:user_created' => '%s kaydedildi',
	'uservalidationbyemail:admin:resend_validation' => 'Doğrulamayı tekrar gönder',
	'uservalidationbyemail:admin:validate' => 'Doğrula',
	'uservalidationbyemail:confirm_validate_user' => '%s kullanıcısını doğrula?',
	'uservalidationbyemail:confirm_resend_validation' => 'Doğrulama e-postası %s adresine tekrar gönderilsin mi?',
	'uservalidationbyemail:confirm_delete' => '%s\'i sil?',
	'uservalidationbyemail:confirm_validate_checked' => 'Kontrol edilen kullanıcıları doğrulamak mı istiyorsunuz?',
	'uservalidationbyemail:confirm_resend_validation_checked' => 'Kontrol edilmiş kullanıcılara doğrulama yeniden gönderilsin mi?',
	'uservalidationbyemail:confirm_delete_checked' => 'Kontrol edilen kullanıcılar silinsin mi?',
	
	'uservalidationbyemail:errors:unknown_users' => 'Bilinmeyen kullanıcılar',
	'uservalidationbyemail:errors:could_not_validate_user' => 'Kullanıcı doğrulanamadı.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'Kontrol edilen tüm kullanıcılar doğrulanamadı.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'Kullanıcı silinemedi.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'Kontrol edilen tüm kullanıcılar silinemedi.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'Doğrulama isteği yeniden gönderilemedi.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'Kontrol edilen kullanıcılar için tüm doğrulama istekleri yeniden gönderilemedi.',

	'uservalidationbyemail:messages:validated_user' => 'Kullanıcı doğrulandı..',
	'uservalidationbyemail:messages:validated_users' => 'All checked users validated.',
	'uservalidationbyemail:messages:deleted_user' => 'Kullanıcı silindi.',
	'uservalidationbyemail:messages:deleted_users' => 'Kontrol edilen tüm kullanıcılar silindi.',
	'uservalidationbyemail:messages:resent_validation' => 'Doğrulama isteği yeniden gönderildi.',
	'uservalidationbyemail:messages:resent_validations' => 'Doğrulama istekleri, kontrol edilen tüm kullanıcılara yeniden gönderildi.'

);
