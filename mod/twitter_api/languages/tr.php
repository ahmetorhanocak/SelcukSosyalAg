<?php
return array(
	'twitter_api' => 'Twitter Servisleri',

	'twitter_api:requires_oauth' => 'Twitter Hizmetlerini kullanmak için OAuth Kütüphaneleri eklentisinin etkinleştirilmesini gerekir.',

	'twitter_api:consumer_key' => 'Tüketici Anahtarı',
	'twitter_api:consumer_secret' => 'Tüketici Şifresi',

	'twitter_api:settings:instructions' => '<a href="https://dev.twitter.com/apps/new" target="_blank"> Twitter </a> adresinden bir tüketici anahtarı ve şifresi almalısınız. Yeni uygulama başvurusunu doldurun. Uygulama türü olarak "Tarayıcı" seçeneğini ve erişim türünü "Oku & Yaz" olarak seçin. Geri arama url\'si %stwitter_api/aouthorize',

	'twitter_api:usersettings:description' => "%s hesabınızı Twitter ile bağlayın.",
	'twitter_api:usersettings:request' => "Twitter hesabınıza erişmek için öncelikle <a href=\"%s\"> yetkilendirmeniz gerekir </a>.",
	'twitter_api:usersettings:cannot_revoke' => "Bir e-posta adresi veya şifre sağlamadığınız için hesabınızı Twitter ile bağlantısını kuramazsınız. <a href=\"%s\"> Şimdi sağlayın </a>.",
	'twitter_api:authorize:error' => 'Twitter\'a yetki verilemiyor.',
	'twitter_api:authorize:success' => 'Twitter erişimi yetkilendirildi.',

	'twitter_api:usersettings:authorized' => "Twitter hesabınıza erişmek için %s yetkili: @%s.",
	'twitter_api:usersettings:revoke' => 'Erişimi iptal etmek için <a href="%s"> burayı </a> tıklayın.',
	'twitter_api:usersettings:site_not_configured' => 'Kullanılabilmesi için yöneticinin önce Twitter\'ı yapılandırması gerekmektedir.',

	'twitter_api:revoke:success' => 'Twitter erişimi iptal edildi.',

	'twitter_api:post_to_twitter' => "Kullanıcıların sesini duyur gönderileri Twitter'a gönderilsin mi?",

	'twitter_api:login' => 'Kullanıcıların Twitter ile oturum açmasına izin verilsin mi?',
	'twitter_api:new_users' => 'Yeni kullanıcıların, kullanıcı kaydı devre dışı olsa bile Twitter hesabını kullanarak kaydolmasına izin verilsin mi?',
	'twitter_api:login:success' => 'Giriş yaptınız.',
	'twitter_api:login:error' => 'Twitter ile giriş yapılamıyor.',
	'twitter_api:login:email' => "Yeni %s hesabınız için geçerli bir e-posta adresi girmelisiniz.",

	'twitter_api:invalid_page' => 'Geçersiz sayfa',

	'twitter_api:deprecated_callback_url' => 'Geri arama URL\'si, Twitter API\'si için %s olarak değişti. Lütfen yöneticinizden değiştirmesini isteyin.',

	'twitter_api:interstitial:settings' => 'Ayarlarınızı yapılandırın',
	'twitter_api:interstitial:description' => '%s\'yi kullanmaya neredeyse hazırsınız! Devam edebilmeniz için daha fazla ayrıntıya ihtiyacımız var. Bunlar isteğe bağlıdır, ancak Twitter çökerse veya hesaplarınızın bağlantısını kaldırmaya karar verirseniz giriş yapmanıza izin verir.',

	'twitter_api:interstitial:username' => 'Bu kullanıcı adın. Değiştirilemez. Bir şifre belirlerseniz, giriş yapmak için kullanıcı adını veya e-posta adresini kullanabilirsiniz.',

	'twitter_api:interstitial:name' => 'İnsanlar sizinle etkileşime girerken görecekleri addır.',

	'twitter_api:interstitial:email' => 'E-posta adresiniz. Kullanıcılar bunu varsayılan olarak göremezler.',

	'twitter_api:interstitial:password' => 'Twitter kapalıysa veya hesaplarınızın bağlantısını kaldırmaya karar verirseniz, giriş yapmak için bir şifre.',
	'twitter_api:interstitial:password2' => 'Tekrar aynı şifre.',

	'twitter_api:interstitial:no_thanks' => 'Hayır, teşekkürler',

	'twitter_api:interstitial:no_display_name' => 'Bir görünen adın olmalıdır.',
	'twitter_api:interstitial:invalid_email' => 'Geçerli bir e-posta adresi girmelisiniz ya da boş bırakabilirsiniz.',
	'twitter_api:interstitial:existing_email' => 'Bu e-posta adresi zaten bu sitede kayıtlı.',
	'twitter_api:interstitial:password_mismatch' => 'Şifreleriniz birbirine uymuyor.',
	'twitter_api:interstitial:cannot_save' => 'Hesap ayrıntıları kaydedilemiyor.',
	'twitter_api:interstitial:saved' => 'Hesap bilgileri kaydedildi!',
);
