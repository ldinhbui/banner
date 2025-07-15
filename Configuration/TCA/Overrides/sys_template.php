<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function()
{
    $extensionKey = 'banner';

    /**
     * Register TypoScript for Banner
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Banner'
    );
});
