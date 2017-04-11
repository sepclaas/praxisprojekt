<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Avonis.Praxisprojekclaas2',
            'Calendar',
            [
                'Sd' => 'list'
            ],
            // non-cacheable actions
            [
                'Sd' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					calendar {
						icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/user_plugin_calendar.svg
						title = LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_calendar
						description = LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_calendar.description
						tt_content_defValues {
							CType = list
							list_type = praxisprojekclaas2_calendar
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
