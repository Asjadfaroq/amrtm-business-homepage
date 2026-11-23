<?php

return [

    'locales' => ['ar', 'en'],

    'rtl' => ['ar'],
    'fonts' => [
        'ar' => [
            '@fontsource/cairo/files/cairo-arabic-400-normal.woff2',
            '@fontsource/cairo/files/cairo-arabic-600-normal.woff2',
            '@fontsource/cairo/files/cairo-arabic-700-normal.woff2',
            '@fontsource/cairo/files/cairo-arabic-800-normal.woff2',
            '@fontsource/cairo/files/cairo-arabic-900-normal.woff2',
            '@fontsource/cairo/files/cairo-latin-400-normal.woff2',
            '@fontsource/cairo/files/cairo-latin-600-normal.woff2',
            '@fontsource/cairo/files/cairo-latin-700-normal.woff2',
            '@fontsource/cairo/files/cairo-latin-800-normal.woff2',
            '@fontsource/cairo/files/cairo-latin-900-normal.woff2',
        ],
        'en' => [
            '@fontsource/inter/files/inter-latin-400-normal.woff2',
            '@fontsource/inter/files/inter-latin-600-normal.woff2',
            '@fontsource/inter/files/inter-latin-700-normal.woff2',
            '@fontsource/inter/files/inter-latin-800-normal.woff2',
            '@fontsource/inter/files/inter-latin-900-normal.woff2',
        ],
        'icons' => [
            '@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2',
            '@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff2',
            '@tabler/icons-webfont/dist/fonts/tabler-icons.core.woff2',
        ],
    ],

    'navigation' => ['home', 'services', 'consultants', 'about', 'contact'],
    'pages' => ['services', 'consultants', 'about', 'contact'],

    'mobile_navigation' => [
        ['label' => 'nav.home', 'icon' => 'house', 'page' => null, 'link' => true],
        ['label' => 'nav.services', 'icon' => 'table-cells-large', 'page' => 'services', 'link' => true],
        ['label' => 'nav.about', 'icon' => 'circle-info', 'page' => 'about', 'link' => true],
        ['label' => 'nav.contact', 'icon' => 'envelope', 'page' => 'contact', 'link' => true],
        ['label' => 'nav.consultants', 'icon' => 'building', 'page' => 'consultants', 'link' => true],
        ['label' => 'actions.sign_in', 'icon' => 'right-to-bracket', 'page' => null, 'link' => false],
        ['label' => 'actions.create_account', 'icon' => 'user-plus', 'page' => null, 'link' => false],
    ],

    'hero' => [
        'slides' => [
            'images/hero/slide-1.jpg',
            'images/hero/slide-2.jpg',
            'images/hero/slide-3.jpg',
            'images/hero/slide-4.jpg',
        ],
    ],

    'contact' => [
        'phone' => '966920002164',
        'whatsapp' => '966504915222',
    ],

];
