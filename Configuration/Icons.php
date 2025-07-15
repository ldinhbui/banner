<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-banner-svgicon' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:banner/Resources/Public/Icons/Extension.svg',
    ],
];
