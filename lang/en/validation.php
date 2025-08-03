<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Doğrulama Dil Satırları
    |--------------------------------------------------------------------------
    |
    | Aşağıdaki dil satırları doğrulayıcı sınıfı tarafından kullanılan
    | varsayılan hata mesajlarını içerir. Bazı kuralların birden fazla versiyonu
    | olabilir. Mesajları ihtiyacınıza göre buradan değiştirebilirsiniz.
    |
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute :date tarihine eşit veya sonra olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute sadece harf ve rakamlardan oluşmalıdır.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute :date tarihine eşit veya önce olmalıdır.',
    'between' => [
        'array' => ':attribute en az :min en fazla :max öğe içermelidir.',
        'file' => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'string' => ':attribute :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute doğrulaması eşleşmiyor.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute :date tarihine eşit olmalıdır.',
    'date_format' => ':attribute :format formatıyla eşleşmiyor.',
    'different' => ':attribute ile :other farklı olmalıdır.',
    'digits' => ':attribute :digits basamak olmalıdır.',
    'digits_between' => ':attribute :min ile :max basamak arasında olmalıdır.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanı zorunludur.',
    'gt' => [
        'array' => ':attribute en az :value öğeye sahip olmalıdır.',
        'file' => ':attribute :value kilobayttan büyük olmalıdır.',
        'numeric' => ':attribute :value değerinden büyük olmalıdır.',
        'string' => ':attribute :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute en az :value öğeye sahip olmalıdır.',
        'file' => ':attribute :value kilobayta eşit veya büyük olmalıdır.',
        'numeric' => ':attribute :value değerine eşit veya büyük olmalıdır.',
        'string' => ':attribute :value karaktere eşit veya uzun olmalıdır.',
    ],
    'image' => ':attribute bir resim dosyası olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'integer' => ':attribute bir tam sayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON string olmalıdır.',
    'lt' => [
        'array' => ':attribute en fazla :value öğeye sahip olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük olmalıdır.',
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'string' => ':attribute :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute en fazla :value öğeye sahip olmalıdır.',
        'file' => ':attribute :value kilobayta eşit veya küçük olmalıdır.',
        'numeric' => ':attribute :value değerine eşit veya küçük olmalıdır.',
        'string' => ':attribute :value karaktere eşit veya kısa olmalıdır.',
    ],
    'max' => [
        'array' => ':attribute en fazla :max öğe içerebilir.',
        'file' => ':attribute en fazla :max kilobayt olabilir.',
        'numeric' => ':attribute en fazla :max olabilir.',
        'string' => ':attribute en fazla :max karakter olabilir.',
    ],
    'mimes' => ':attribute dosya türü :values olmalıdır.',
    'mimetypes' => ':attribute dosya türü :values olmalıdır.',
    'min' => [
        'array' => ':attribute en az :min öğe içermelidir.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute en az :min olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
    ],
    'not_in' => 'Seçilen :attribute geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_if' => ':other :value olduğunda :attribute alanı zorunludur.',
    'required_unless' => ':other :values içinde olmadığında :attribute alanı zorunludur.',
    'required_with' => ':values mevcutsa :attribute alanı zorunludur.',
    'required_with_all' => ':values mevcutsa :attribute alanı zorunludur.',
    'required_without' => ':values mevcut değilse :attribute alanı zorunludur.',
    'required_without_all' => ':values hiçbiri mevcut değilse :attribute alanı zorunludur.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute :size öğe içermelidir.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
    ],
    'string' => ':attribute bir metin olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute daha önce alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Özel Doğrulama Mesajları
    |--------------------------------------------------------------------------
    |
    | Burada attribute.rule biçiminde özel mesajlar yazabilirsiniz.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel-mesaj',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Özel Attribute İsimleri
    |--------------------------------------------------------------------------
    |
    | Bu bölümde alan isimlerinin kullanıcıya daha anlamlı görünmesi için
    | tanımlamalar yapılabilir.
    |
    */

    'attributes' => [
        'name' => 'isim',
        'surname' => 'soyisim',
        'tc_id' => 'TC kimlik numarası',
        'email' => 'e-posta adresi',
        'birth_date' => 'doğum tarihi',
        'phone' => 'telefon numarası',
        'doctor_id' => 'doktor',
        'traitment_id' => 'tedavi',
        'date' => 'tarih',
    ],

];
