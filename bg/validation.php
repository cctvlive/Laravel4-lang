<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "Трябва да приемете :attribute.",
    "active_url"       => "Полето :attribute не е валиден URL адрес.",
    "after"            => "Полето :attribute трябва да бъде дата след :date.",
    "alpha"            => "Полето :attribute трябва да съдържа само букви.",
    "alpha_dash"       => "Полето :attribute трябва да съдържа само букви, цифри, долна черта и тире.",
    "alpha_num"        => "Полето :attribute трябва да съдържа само букви и цифри.",
    "array"            => "Полето :attribute трябва да бъде масив.",
    "before"           => "Полето :attribute трябва да бъде дата преди :date.",
    "between"          => array(
        "numeric" => "Полето :attribute трябва да бъде между :min и :max.",
        "file"    => "Полето :attribute трябва да бъде между :min и :max килобайта.",
        "string"  => "Полето :attribute трябва да бъде между :min и :max знака.",
        "array"   => "Полето :attribute трябва да има между :min - :max елемента."
    ),
    "confirmed"        => "Полето :attribute не е потвърдено.",
    "date"             => "Полето :attribute не е валидна дата.",
    "date_format"      => "Полето :attribute не е във формат :format.",
    "different"        => "Полетата :attribute и :other трябва да са различни.",
    "digits"           => "Полето :attribute трябва да има :digits цифри.",
    "digits_between"   => "Полето :attribute трябва да има между :min и :max цифри.",
    "email"            => "Полето :attribute е в невалиден формат.",
    "exists"           => "Избранато поле :attribute вече съществува.",
    "image"            => "Полето :attribute трябва да бъде изображение.",
    "in"               => "Избраното поле :attribute е невалидно.",
    "integer"          => "Полето :attribute трябва да бъде цяло число.",
    "ip"               => "Полето :attribute трябва да бъде IP адрес.",
    "max"              => array(
        "numeric" => "Полето :attribute трябва да бъде по-малко от :max.",
        "file"    => "Полето :attribute трябва да бъде по-малко от :max килобайта.",
        "string"  => "Полето :attribute трябва да бъде по-малко от :max знака.",
        "array"   => "Полето :attribute трябва да има по-малко от :max елемента."
    ),
    "mimes"            => "Полето :attribute трябва да бъде файл от тип: :values.",
    "min"              => array(
        "numeric" => "Полето :attribute трябва да бъде минимум :min.",
        "file"    => "Полето :attribute трябва да бъде минимум :min килобайта.",
        "string"  => "Полето :attribute трябва да бъде минимум :min знака.",
        "array"   => "Полето :attribute трябва има минимум :min елемента."
    ),
    "not_in"           => "Избраното поле :attribute е невалидно.",
    "numeric"          => "Полето :attribute трябва да бъде число.",
    "regex"            => "Полето :attribute е в невалиден формат.",
    "required"         => "Полето :attribute е задължително.",
    "required_if"      => "Полето :attribute се изисква, когато :other е :value.",
    "required_with"    => "Полето :attribute се изисква, когато :values има стойност.",
    "required_without" => "Полето :attribute се изисква, когато :values няма стойност.",
    "required_without_all" => "The :attribute field is required when none of :values are present.",
    "same"             => "Полетата :attribute и :other трябва да съвпадат.",
    "size"             => array(
        "numeric" => "Полето :attribute трябва да бъде :size.",
        "file"    => "Полето :attribute трябва да бъде :size килобайта.",
        "string"  => "Полето :attribute трябва да бъде :size знака.",
        "array"   => "Полето :attribute трябва да има :size елемента."
    ),
    "unique"           => "Полето :attribute вече съществува.",
    "url"              => "Полето :attribute е в невалиден формат.",
    "recaptcha" => 'Стойността на :attribute е неправилна.',

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

    'custom' => array(),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(
            "name" => "Име",
            "username" => "Потребител",
            "email" => "E-mail",
            "first_name" => "Име",
            "last_name" => "Фамилия",
            "password" => "Парола",
            "city" => "Град",
            "country" => "Държава",
            "address" => "Адрес",
            "phone" => "Телефон",
            "mobile" => "GSM",
            "age" => "Възраст",
            "sex" => "Пол",
            "gender" => "Пол",
            "day" => "Ден",
            "month" => "Месец",
            "year" => "Година",
            "hour" => "Час",
            "minute" => "Минута",
            "second" => "Секунда",
            "title" => "Заглавие",
            "content" => "Съдържание",
            "description" => "Описание",
            "excerpt" => "Откъс",
            "date" => "Дата",
            "time" => "Време",
            "available" => "Достъпен",
            "size" => "Размер",
            "recaptcha_response_field" => "Рекапча",
            "subject" => "Заглавие",
            "message" => "Съобщение"
    ),

);