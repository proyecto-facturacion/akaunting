<?php

return [

    'whoops'              => 'Ups!',
    'hello'               => 'Witaj!',
    'salutation'          => 'Pozdrawiamy,<br> :company_name',
    'subcopy'             => 'Jeśli masz problem z kliknięciem przycisku ":text", skopiuj i wklej poniższy adres URL do swojej przeglądarki: [:url](:url)',

    'update' => [

        'mail' => [

            'subject' => '⚠️ Aktualizacja nie powiodła się :domain',
            'message' => 'Aktualizacja :alias z :current_version do :new_version nie powiodła się w <strong>:step</strong> kroku z następującą wiadomością: :error_message',

        ],

        'slack' => [

            'message' => 'Aktualizacja nie powiodła się na :domain',

        ],

    ],

];
