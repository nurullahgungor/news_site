<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute alanı kabul edilmelidir.',
    'accepted_if' => ':other :value olduğunda :attribute alanı kabul edilmelidir.',
    'active_url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'after' => ':attribute alanı :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute alanı :date tarihine eşit veya sonraki bir tarih olmalıdır.',
    'alpha' => ':attribute alanı yalnızca harf içermelidir.',
    'alpha_dash' => ':attribute alanı yalnızca harf, sayı, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute alanı yalnızca harf ve sayı içermelidir.',
    'array' => ':attribute alanı bir dizi olmalıdır.',
    'ascii' => ':attribute alanı yalnızca tek baytlık alfasayisal karakterler ve semboller içermelidir.',
    'before' => ':attribute alanı :date tarihinden önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute alanı :date tarihine eşit veya önceki bir tarih olmalıdır.',
    'between' => [
    'array' => ':attribute alanı :min ile :max arasında öğe içermelidir.',
    'file' => ':attribute alanı :min ile :max kilobyte arasında olmalıdır.',
    'numeric' => ':attribute alanı :min ile :max arasında olmalıdır.',
    'string' => ':attribute alanı :min ile :max karakter arasında olmalıdır.',
    ],
    'boolean' => ':attribute alanı true veya false olmalıdır.',
    'can' => ':attribute alanı yetkisiz bir değer içeriyor.',
    'confirmed' => ':attribute alanı teyidi eşleşmiyor.',
    'current_password' => 'Şifre hatalı.',
    'date' => ':attribute alanı geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute alanı :date tarihine eşit bir tarih olmalıdır.',
    'date_format' => ':attribute alanı :format formatına uymalıdır.',
    'decimal' => ':attribute alanında :decimal basamak olmalıdır.',
    'declined' => ':attribute alanı reddedilmelidir.',
    'declined_if' => ':other :value olduğunda :attribute alanı reddedilmelidir.',
    'different' => ':attribute alanı ile :other farklı olmalıdır.',
    'digits' => ':attribute alanı :digits haneli olmalıdır.',
    'digits_between' => ':attribute alanı :min ile :max arasında haneli olmalıdır.',
    'dimensions' => ':attribute alanı geçersiz görüntü boyutlarına sahiptir.',
    'distinct' => ':attribute alanında yinelenen bir değer var.',
    'doesnt_end_with' => ':attribute alanı aşağıdakilerden herhangi biriyle bitmemelidir: :values.',
    'doesnt_start_with' => ':attribute alanı aşağıdakilerden herhangi biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanı geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute alanı aşağıdakilerden biriyle bitmelidir: :values.',
    'enum' => 'Seçili :attribute alanı geçersiz.',
    'exists' => 'Seçili :attribute alanı geçersiz.',
    'extensions' => ':attribute alanı aşağıdaki uzantılardan birine sahip olmalıdır: :values.',
    'file' => ':attribute alanı bir dosya olmalıdır.',
    'filled' => ':attribute alanı bir değere sahip olmalıdır.',
    'gt' => [
    'array' => ':attribute alanı :value öğeden fazla içermelidir.',
    'file' => ':attribute alanı :value kilobyteden büyük olmalıdır.',
    'numeric' => ':attribute alanı :value değerinden büyük olmalıdır.',
    'string' => ':attribute alanı :value karakterden uzun olmalıdır.',
    ],
    'gte' => [
        'array' => ':attribute alanı :value öğe veya daha fazla içermelidir.',
        'file' => ':attribute alanı :value kilobyte veya daha büyük olmalıdır.',
        'numeric' => ':attribute alanı :value değerine eşit veya daha büyük olmalıdır.',
        'string' => ':attribute alanı :value karaktere eşit veya daha uzun olmalıdır.',
    ],
    'hex_color' => ':attribute alanı geçerli bir onaltılık renk değeri olmalıdır.',
    'image' => ':attribute alanı bir resim olmalıdır.',
    'in' => 'Seçili :attribute alanı geçersiz.',
    'in_array' => ':attribute alanı :other içinde bulunmalıdır.',
    'integer' => ':attribute alanı tam sayı olmalıdır.',
    'ip' => ':attribute alanı geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute alanı geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute alanı geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute alanı geçerli bir JSON dizesi olmalıdır.',
    'lowercase' => ':attribute alanı küçük harflerle yazılmalıdır.',
    'lt' => [
        'array' => ':attribute alanı :value öğeden az içermelidir.',
        'file' => ':attribute alanı :value kilobyteden küçük olmalıdır.',
        'numeric' => ':attribute alanı :value değerinden küçük olmalıdır.',
        'string' => ':attribute alanı :value karakterden kısa olmalıdır.',
    ],
    'lte' => [
        'array' => ':attribute alanı :value öğeden fazla içermemelidir.',
        'file' => ':attribute alanı :value kilobyteden fazla veya eşit olmamalıdır.',
        'numeric' => ':attribute alanı :value değerine eşit veya küçük olmamalıdır.',
        'string' => ':attribute alanı :value karaktere eşit veya kısa olmamalıdır.',
      ],
      'mac_address' => ':attribute alanı geçerli bir MAC adresi olmalıdır.',
      'max' => [
        'array' => ':attribute alanı :max öğeden fazla içermemelidir.',
        'file' => ':attribute alanı :max kilobyteden büyük olmamalıdır.',
        'numeric' => ':attribute alanı :max değerinden büyük olmamalıdır.',
        'string' => ':attribute alanı :max karakterden uzun olmamalıdır.',
      ],
      'max_digits' => ':attribute alanı en fazla :max basamak içermelidir.',
      'mimes' => ':attribute alanı :values türünde bir dosya olmalıdır.',
      'mimetypes' => ':attribute alanı :values türünde bir dosya olmalıdır.',
      'min' => [
        'array' => ':attribute alanı en az :min öğe içermelidir.',
        'file' => ':attribute alanı en az :min kilobyte olmalıdır.',
        'numeric' => ':attribute alanı en az :min değerinde olmalıdır.',
        'string' => ':attribute alanı en az :min karakter uzunluğunda olmalıdır.',
    ],
    'min_digits' => ':attribute alanı en az :min basamak içermelidir.',
    'missing' => ':attribute alanı eksik olmamalıdır.',
    'missing_if' => ':other :value olduğunda :attribute alanı eksik olmamalıdır.',
    'missing_unless' => ':other :value değeri dışında :attribute alanı eksik olmamalıdır.',
    'missing_with' => ':values mevcut olduğunda :attribute alanı eksik olmamalıdır.',
    'missing_with_all' => ':values mevcut olduğunda :attribute alanı eksik olmamalıdır.',
    'multiple_of' => ':attribute alanı :value katı olmalıdır.',
    'not_in' => 'Seçili :attribute alanı geçersiz.',
    'not_regex' => ':attribute alanı formatı geçersiz.',
    'numeric' => ':attribute alanı bir sayı olmalıdır.',
    'password' => [
    'letters' => ':attribute alanı en az bir harf içermelidir.',
    'mixed' => ':attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
    'numbers' => ':attribute alanı en az bir sayı içermelidir.',
    'symbols' => ':attribute alanı en az bir sembol içermelidir.',
    'uncompromised' => 'Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen farklı bir :attribute seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'present_if' => ':other :value olduğunda :attribute alanı mevcut olmalıdır.',
    'present_unless' => ':other :value değeri dışında :attribute alanı mevcut olmalıdır.',
    'present_with' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'present_with_all' => ':values mevcut olduğunda :attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanı yasaklanmıştır.',
    'prohibited_if' => ':other :value olduğunda :attribute alanı yasaklanmıştır.',
    'prohibited_unless' => ':other :values değerlerinden biri dışında :attribute alanı yasaklanmıştır.',
    'prohibits' => ':attribute alanı :other alanının bulunmasını engeller.',
    'regex' => ':attribute alanı formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı için şu girdiler zorunludur: :values.',
    'required_if' => ':other :value olduğunda :attribute alanı gereklidir.',
    'required_if_accepted' => ':other kabul edildiğinde :attribute alanı gereklidir.',
    'required_unless' => ':other :values değerlerinden biri dışında :attribute alanı gereklidir.',
    'required_with' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_with_all' => ':values mevcut olduğunda :attribute alanı gereklidir.',
    'required_without' => ':values mevcut olmadığında :attribute alanı gereklidir.',
    'required_without_all' => ':values değerlerinden hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
    'same' => ':attribute alanı :other ile eşleşmelidir.',
    'size' => [
    'array' => ':attribute alanı :size öğe içermelidir.',
    'file' => ':attribute alanı :size kilobyte olmalıdır.',
    'numeric' => ':attribute alanı :size değeri olmalıdır.',
    'string' => ':attribute alanı :size karakter uzunluğunda olmalıdır.',
    ],
    'starts_with' => ':attribute alanı aşağıdakilerden biriyle başlamalıdır: :values.',
    'string' => ':attribute alanı bir metin olmalıdır.',
    'timezone' => ':attribute alanı geçerli bir zaman dilimi olmalıdır.',
    'unique' => ':attribute alanı zaten kullanılıyor.',
    'uploaded' => ':attribute alanının yüklenmesi başarısız oldu.',
    'uppercase' => ':attribute alanı büyük harflerle yazılmalıdır.',
    'url' => ':attribute alanı geçerli bir URL olmalıdır.',
    'ulid' => ':attribute alanı geçerli bir ULID olmalıdır.',
    'uuid' => ':attribute alanı geçerli bir UUID olmalıdır.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
