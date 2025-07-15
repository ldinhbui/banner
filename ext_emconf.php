<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Banner Extension',
    'description' => 'A TYPO3 extension adding flash notification-like banners in pages',
    'category' => 'plugin',
    'author' => 'Luat Dinh Bui',
    'author_email' => 'ldinhbui@gmail.com',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];