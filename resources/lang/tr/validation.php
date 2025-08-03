<?php

return [

    'accepted'             => ':attribute kabul edilmelidir.',
    'active_url'           => ':attribute geçerli bir URL olmalıdır.',
    'after'                => ':attribute :bugünün tarihinden sonra olmalıdır.',
    'alpha'                => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_num'            => ':attribute sadece harf ve rakamlardan oluşmalıdır.',
    'array'                => ':attribute bir dizi olmalıdır.',
    'before'               => ':attribute :bugünün tarihinden önce olmalıdır.',
    'between'              => [
        'numeric' => ':attribute :min ile :max arasında olmalıdır.',
        'file'    => ':attribute :min ile :max kilobayt arasında olmalıdır.',
        'string'  => ':attribute :min ile :max karakter arasında olmalıdır.',
        'array'   => ':attribute :min ile :max öğe arasında olmalıdır.',
    ],
    'boolean'              => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed'            => ':attribute tekrarı eşleşmiyor.',
    'date'                 => ':attribute geçerli bir tarih olmalıdır.',
    'email'                => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'in'                   => 'Seçilen :attribute geçersiz.',
    'integer'              => ':attribute bir tam sayı olmalıdır.',
    'max'                  => [
        'string'  => ':attribute en fazla :max karakter olmalıdır.',
    ],
    'min'                  => [
        'string'  => ':attribute en az :min karakter olmalıdır.',
    ],
    'custom' => [
        'phone' => [
            'min' => 'Telefon numarası en az 10 karakter olmalıdır.',
            'max' => 'Telefon numarası en fazla 10 karakter olmalıdır.',
            'size' => 'Telefon numarası 10 karakter olmalıdır.',
        ],
        'tc_id' => [
            'min' => 'T.C. Kimlik Numarası en az 11 karakter olmalıdır.',
            'max' => 'T.C. Kimlik Numarası 11 karakter olmalıdır.',
            'size' => 'Telefon numarası 10 karakter olmalıdır.',
        ],
        'birth_date' => [
        'before_or_equal' => '18 yaşından küçükler randevu alamaz.',
        'after_or_equal' => '100 yaşından büyük bir tarih giremezsiniz.',
        ],
        'date' => [
        'before_or_equal' => 'Randevu tarihi 1 yıldan sonraya alınamaz.',
        ],
    ],
    'regex'                => ':attribute formatı geçersiz.',
    'required'             => ':attribute alanı zorunludur.',
    'string'               => ':attribute metin olmalıdır.',
    'unique'               => ':attribute zaten alınmış.',
    'exists'               => 'Seçilen :attribute geçersiz.',

    'attributes' => [
        'name' => 'Ad',
        'surname' => 'Soyad',
        'tc_id' => 'T.C. Kimlik Numarası',
        'email' => 'E-posta',
        'phone' => 'Telefon',
        'birth_date' => 'Doğum Tarihi',
        'doctor_id' => 'Doktor',
        'traitment_id' => 'İşlem',
        'date' => 'Randevu Tarihi',
    ],

];
