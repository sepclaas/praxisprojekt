<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
    if (file_exists($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile'])) {
        require_once($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile']);
    }
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_praxisprojekclaas2_fe_users = [];
    $tempColumnstx_praxisprojekclaas2_fe_users[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['User','Tx_Praxisprojekclaas2_User']
            ],
            'default' => 'Tx_Praxisprojekclaas2_User',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumnstx_praxisprojekclaas2_fe_users);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    $GLOBALS['TCA']['fe_users']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['fe_users']['ctrl']['label']
);

$tmp_praxisprojekclaas2_columns = [

    'id' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.id',
        'config' => [
		    'type' => 'input',
		    'size' => 4,
		    'eval' => 'int'
		]
    ],
    'montag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.montag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'dienstag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.dienstag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_dienstag_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'mittwoch' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.mittwoch',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_mittwoch_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'donnerstag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.donnerstag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_donnerstag_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'freitag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.freitag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_freitag_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'samstag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.samstag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_samstag_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
    'sonntag' => [
        'exclude' => true,
        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.sonntag',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectMultipleSideBySide',
		    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
		    'MM' => 'tx_praxisprojekclaas2_user_sonntag_sd_mm',
		    'size' => 10,
		    'autoSizeMax' => 30,
		    'maxitems' => 9999,
		    'multiple' => 0,
		    'wizards' => [
		        '_PADDING' => 1,
		        '_VERTICAL' => 1,
		        'edit' => [
		            'module' => [
		                'name' => 'wizard_edit',
		            ],
		            'type' => 'popup',
		            'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
		            'popup_onlyOpenIfSelected' => 1,
		            'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
		        ],
		        'add' => [
		            'module' => [
		                'name' => 'wizard_add',
		            ],
		            'type' => 'script',
		            'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
		            'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
		            'params' => [
		                'table' => 'tx_praxisprojekclaas2_domain_model_sd',
		                'pid' => '###CURRENT_PID###',
		                'setValue' => 'prepend'
		            ],
		        ],
		    ],
		],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_praxisprojekclaas2_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
    $GLOBALS['TCA']['fe_users']['types']['Tx_Praxisprojekclaas2_User']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
    // use first entry in types array
    $fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
    $GLOBALS['TCA']['fe_users']['types']['Tx_Praxisprojekclaas2_User']['showitem'] = $fe_users_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['fe_users']['types']['Tx_Praxisprojekclaas2_User']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_Praxisprojekclaas2_User']['showitem'] .= ',--div--;LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user,';
$GLOBALS['TCA']['fe_users']['types']['Tx_Praxisprojekclaas2_User']['showitem'] .= 'id, montag, dienstag, mittwoch, donnerstag, freitag, samstag, sonntag';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Praxisprojekclaas2_User','Tx_Praxisprojekclaas2_User'];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '',
    'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);
