<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Avonis.Praxisprojekclaas2',
            'Calendar',
            'Calendar'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'praxisprojekt1');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_praxisprojekclaas2_domain_model_sd', 'EXT:praxisprojekclaas2/Resources/Private/Language/locallang_csh_tx_praxisprojekclaas2_domain_model_sd.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_praxisprojekclaas2_domain_model_sd');

    },
    $_EXTKEY
);
