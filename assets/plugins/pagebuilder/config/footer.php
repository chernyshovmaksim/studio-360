<?php

return [
    'title' => 'Блок "Подвал проекта"',

    'container' => 'pbcontainer',

    'fields' => [
        'image' => [
            'caption' => 'Изображение блока',
            'type' => 'image'
        ],
        'prev' => [
            'caption' => 'ID проекта до',
            'type'    => 'text',
        ],
        'next' => [
            'caption' => 'ID проекта после',
            'type'    => 'text',
        ],
    ],
];
