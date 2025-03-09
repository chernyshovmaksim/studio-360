<?php

return [
    'title' => 'Блок "Текст"',

    'container' => 'pbcontainer',

    'fields' => [
        'title' => [
            'caption' => 'Заголовок',
            'type' => 'text',
            'default' => 'Укажите заголовок текстового блока'
        ],
        'body' => [
            'caption' => 'Текст',
            'type'    => 'richtext',
            'default' => 'Основной текст',
            'theme'   => 'inline',
            'options' => [
                'height' => '80px',
            ],
        ],
    ],
];
