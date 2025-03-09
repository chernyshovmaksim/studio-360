<?php

return [
    'title' => 'Блок "Карусель изображений"',

    //        'show_in_templates' => [ 4 ],

    //        'show_in_docs' => [ 2 ],

    //        'hide_in_docs' => [ 5 ],

    //        'order' => 1,

    'image' => 'assets/plugins/pagebuilder/images/image.jpg',

    'container' => 'pbcontainer',

    'fields' => [
        'images' => [
            'caption' => 'Набор изображений',
            'type' => 'group',
            'fields' => [
                'image' => [
                    'caption' => 'Изображение - слайд',
                    'type'    => 'image',
                ],
            ]
        ],

    ],
];
