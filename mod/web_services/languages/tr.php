<?php
return array(
	'APIException:ApiResultUnknown' => "API sonucu bilinmeyen bir tür, bu asla olmamalı.",
	'APIException:MissingParameterInMethod' => "Eksik parametre %s, %s metodunda.",
	'APIException:ParameterNotArray' => "%s bir dizi olarak görünmüyor.",
	'APIException:UnrecognisedTypeCast' => "Tanımlanamayan tür dönüşümü %s, değişken '%s', metod '%s'",
	'APIException:InvalidParameter' => "Geçersiz parametre '%s', '%s' metodunda bulundu.",
	'APIException:FunctionParseError' => "%s (%s) ayrıştırma hatası var.",
	'APIException:FunctionNoReturn' => "%s(%s) hiç bir değer döndürmedi.",
	'APIException:APIAuthenticationFailed' => "Metod çağrımı API Kimlik Doğrulaması'nda başarısız oldu",
	'APIException:UserAuthenticationFailed' => "Metod çağrımı kullanıcı yetkilendirmesinde başarısız oldu",
	'APIException:MethodCallNotImplemented' => "Metod çağrımı '%s' uygulanmadı.",
	'APIException:FunctionDoesNotExist' => "'%s' metod fonksiyonu çağrılabilir değil",
	'APIException:AlgorithmNotSupported' => "Algoritma '%s' desteklenmiyor veya devre dışı bırakıldı.",
	'APIException:NotGetOrPost' => "İstek yöntemi GET veya POST olmalıdır.",
	'APIException:MissingAPIKey' => "Eksik API anahtarı",
	'APIException:BadAPIKey' => "Hatalı API anahtarı",
	'APIException:MissingHmac' => "Eksik X-Elgg-hmac başlığı",
	'APIException:MissingHmacAlgo' => "Eksik X-Elgg-hmac-algo başlığı",
	'APIException:MissingTime' => "Eksik X-Elgg-time başlığı",
	'APIException:MissingNonce' => "Eksik X-Elgg-nonce başlığı",
	'APIException:TemporalDrift' => "X-Elgg-zamanı çok öncede kaldı ya da henüz gerçekleşmedi. Epoch başarısız.",
	'APIException:NoQueryString' => "Sorgu dizesiyle ilgili hiçbir bilgi yok",
	'APIException:MissingPOSTHash' => "Eksik X-Elgg-posthash başlığı",
	'APIException:MissingPOSTAlgo' => "Eksik X-Elgg-posthash_algo başlığı",
	'APIException:MissingContentType' => "Yayın sonrası veri için eksik içerik türü",
	'SecurityException:APIAccessDenied' => "Üzgünüz, API erişimi yönetici tarafından devre dışı bırakıldı.",
	'SecurityException:NoAuthMethods' => "Bu API isteğini doğrulayabilecek hiçbir kimlik doğrulama yöntemi bulunamadı.",
	'SecurityException:authenticationfailed' => "Kullanıcı kimliği doğrulanamadı",
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Yöntem veya işlev expose_method() çağrısında ayarlanmadı",
	'InvalidParameterException:APIParametersArrayStructure' => "Parametreler dizi yapısı, '%s' yöntemini göstermek ve çağrı için yanlış",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Tanınmayan Http metodu %s, api metodu %s",
	'SecurityException:AuthTokenExpired' => "Kimlik doğrulama şifresi eksik, geçersiz veya süresi doldu.",
	'SecurityException:InvalidPostHash' => "POST veri karması geçersiz -%s bekleniyor, ancak %s var.",
	'SecurityException:DupePacket' => "Paket imza zaten görüldü.",
	'SecurityException:InvalidAPIKey' => "Geçersiz veya eksik API Anahtarı.",
	'NotImplementedException:CallMethodNotImplemented' => "Çağrı metodu '%s' şu anda desteklenmiyor.",
	'CallException:InvalidCallMethod' => "%s, '%s' kullanılarak çağrılmalıdır",

	'system.api.list' => "Sistemde mevcut tüm API çağrılarını listeleyin.",
	'auth.gettoken' => "Bu API çağrısı, kullanıcının gelecekteki API çağrılarının kimlik doğrulamasında kullanılabilecek bir doğrulama belirteci elde etmesini sağlar. Bunu auth_token parametresi olarak iletin.",
);
