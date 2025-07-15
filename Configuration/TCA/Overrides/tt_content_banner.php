<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();


$key = 'banner';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:wizard.banner.title',
        'value' => $key,
        'group' => 'default',
        'icon' => 'EXT:banner/Resources/Public/Icons/Extension.svg',
    ],
);


$GLOBALS['TCA']['tt_content']['types'][$key] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;banner,
            --palette--;;link,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        ',

    'columnsOverrides' => [

        'bodytext' => [
            'config' => [
                'size' => 100,
                'enableRichtext' => true,
                
            ],
        ],
    ],
];
