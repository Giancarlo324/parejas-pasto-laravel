<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser accepted.',
    'active_url' => 'El :attribute no es un válido URL.',
    'after' => 'El :attribute debe ser a date after :date.',
    'after_or_equal' => 'El :attribute debe ser a date after or equal to :date.',
    'alpha' => 'El :attribute may only contain letters.',
    'alpha_dash' => 'El :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'El :attribute may only contain letters and numbers.',
    'array' => 'El :attribute debe ser an array.',
    'before' => 'El :attribute debe ser a date before :date.',
    'before_or_equal' => 'El :attribute debe ser a date before or equal to :date.',
    'between' => [
        'numeric' => 'El :attribute debe ser between :min and :max.',
        'file' => 'El :attribute debe ser between :min and :max kilobytes.',
        'string' => 'El :attribute debe ser between :min and :max caracteres.',
        'array' => 'El :attribute must have between :min and :max items.',
    ],
    'boolean' => 'El :attribute campo debe ser true or false.',
    'confirmed' => 'La :attribute no es igual..',
    'date' => 'El :attribute no es un válido date.',
    'date_equals' => 'El :attribute debe ser a date equal to :date.',
    'date_format' => 'El :attribute does not match the format :format.',
    'different' => 'El :attribute and :other debe ser different.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El :attribute debe ser between :min and :max digits.',
    'dimensions' => 'El :attribute has invalid image dimensions.',
    'distinct' => 'El :attribute campo has a duplicate value.',
    'email' => 'El :attribute debe ser válido email.',
    'ends_with' => 'El :attribute must end with one of the following: :values.',
    'exists' => 'El selected :attribute is invalid.',
    'file' => 'El :attribute debe ser a file.',
    'filled' => 'El :attribute campo must have a value.',
    'gt' => [
        'numeric' => 'El :attribute debe ser greater than :value.',
        'file' => 'El :attribute debe ser greater than :value kilobytes.',
        'string' => 'El :attribute debe ser greater than :value caracteres.',
        'array' => 'El :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser greater than or equal :value.',
        'file' => 'El :attribute debe ser greater than or equal :value kilobytes.',
        'string' => 'El :attribute debe ser greater than or equal :value caracteres.',
        'array' => 'El :attribute must have :value items or more.',
    ],
    'image' => 'El :attribute debe ser an image.',
    'in' => 'El selected :attribute is invalid.',
    'in_array' => 'El :attribute campo does not exist in :other.',
    'integer' => 'El :attribute debe ser an integer.',
    'ip' => 'El :attribute debe ser un válido IP address.',
    'ipv4' => 'El :attribute debe ser un válido IPv4 address.',
    'ipv6' => 'El :attribute debe ser un válido IPv6 address.',
    'json' => 'El :attribute debe ser un válido JSON string.',
    'lt' => [
        'numeric' => 'El :attribute debe ser less than :value.',
        'file' => 'El :attribute debe ser less than :value kilobytes.',
        'string' => 'El :attribute debe ser less than :value caracteres.',
        'array' => 'El :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser less than or equal :value.',
        'file' => 'El :attribute debe ser less than or equal :value kilobytes.',
        'string' => 'El :attribute debe ser less than or equal :value caracteres.',
        'array' => 'El :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de :max items.',
    ],
    'mimes' => 'El :attribute debe ser a file of type: :values.',
    'mimetypes' => 'El :attribute debe ser a file of type: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe ser al menos :min kilobytes.',
        'string' => 'El :attribute debe ser al menos :min caracteres.',
        'array' => 'El :attribute must have al menos :min items.',
    ],
    'multiple_of' => 'El :attribute debe ser a multiple of :value',
    'not_in' => 'El selected :attribute is invalid.',
    'not_regex' => 'El :attribute format is invalid.',
    'numeric' => 'El :attribute debe ser numérico.',
    'password' => 'El password es incorrecto.',
    'present' => 'El :attribute campo debe ser present.',
    'regex' => 'El :attribute format is invalid.',
    'required' => 'El :attribute campo es obligatorio.',
    'required_if' => 'El :attribute campo es obligatorio when :other is :value.',
    'required_unless' => 'El :attribute campo es obligatorio unless :other is in :values.',
    'required_with' => 'El :attribute campo es obligatorio when :values is present.',
    'required_with_all' => 'El :attribute campo es obligatorio when :values are present.',
    'required_without' => 'El :attribute campo es obligatorio when :values no es present.',
    'required_without_all' => 'El :attribute campo es obligatorio when none of :values are present.',
    'same' => 'El :attribute and :other must match.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size caracteres.',
        'array' => 'El :attribute must contain :size items.',
    ],
    'starts_with' => 'El :attribute must start with one of the following: :values.',
    'string' => 'El :attribute debe ser a string.',
    'timezone' => 'El :attribute debe ser un válido zone.',
    'unique' => 'El :attribute ya está en uso.',
    'uploaded' => 'El :attribute failed to upload.',
    'url' => 'El :attribute format is invalid.',
    'uuid' => 'El :attribute debe ser un válido UUID.',

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
    | El following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'estudios' => 'el campo :attribute no puede ser vacío',
        'sobre_mi' => 'el campo :attribute no puede ser vacío',
        'nombre_apellido' => 'el campo :attribute no puede ser vacío',
        'sexo' => 'El campo :attribute no puede ser vacío',
        'fecha_nacimiento' => 'Debes tener más de 18 años para registrarte',
    ],

];
