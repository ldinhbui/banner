<?php
defined('TYPO3') || die();


//Additional fields
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'tx_banner_link'           => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.link',
        'config'  => [
            'type'       => 'input',
            'renderType' => 'inputLink',
            'softref'    => 'typolink',
            'size'       => 50,
            'eval'       => 'trim',
        ],
    ],
    'tx_banner_link_text'      => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.link_text',
        'config'  => [
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
        ],
    ],
    'tx_banner_banner_type' => [
        'exclude' => 1,
        'label'   => 'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.banner_type',
        'config'  => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.banner_type.info',
                    'info',
                ],
                [
                    'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.banner_type.warning',
                    'warning',
                ],
                [
                    'LLL:EXT:banner/Resources/Private/Language/locallang_be.xlf:tt_content.banner_type.error',
                    'error',
                ],
            ],
        ],
    ],
]);


// Custom Palettes
$GLOBALS['TCA']['tt_content']['palettes']['link'] = [
    'showitem' => 'tx_banner_link, tx_banner_link_text',
];
$GLOBALS['TCA']['tt_content']['palettes']['banner'] = [
    'showitem' => 'header,tx_banner_banner_type,--linebreak--,bodytext',
];
