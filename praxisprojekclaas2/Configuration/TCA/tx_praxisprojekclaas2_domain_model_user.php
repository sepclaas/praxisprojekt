<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user',
        'label' => 'id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'id,montag,dienstag,mittwoch,donnerstag,freitag,samstag,sonntag',
        'iconfile' => 'EXT:praxisprojekclaas2/Resources/Public/Icons/tx_praxisprojekclaas2_domain_model_user.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, montag, dienstag, mittwoch, donnerstag, freitag, samstag, sonntag',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, id, montag, dienstag, mittwoch, donnerstag, freitag, samstag, sonntag, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_praxisprojekclaas2_domain_model_user',
                'foreign_table_where' => 'AND tx_praxisprojekclaas2_domain_model_user.pid=###CURRENT_PID### AND tx_praxisprojekclaas2_domain_model_user.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        'id' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.id',
	        'config' => [
			    'type' => 'input',
			    'size' => 4,
			    'eval' => 'int'
			]
	    ],
        'feuseruid' => [
            'exclude' => 1,
            'label' => 'Feuser Id',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'fe_users',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ],
	    'montag' => [
	        'exclude' => true,
	        'label' => 'LLL:EXT:praxisprojekclaas2/Resources/Private/Language/locallang_db.xlf:tx_praxisprojekclaas2_domain_model_user.montag',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectMultipleSideBySide',
			    'foreign_table' => 'tx_praxisprojekclaas2_domain_model_sd',
			    'MM' => 'tx_praxisprojekclaas2_sd_user_mm',
                'MM_opposite_field' => 'montag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
			    'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_dienstag_user_mm',
                'MM_opposite_field' => 'dienstag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_mittwoch_user_mm',
                'MM_opposite_field' => 'mittwoch',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_donnerstag_user_mm',
                'MM_opposite_field' => 'donnerstag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_freitag_user_mm',
                'MM_opposite_field' => 'freitag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_samstag_user_mm',
                'MM_opposite_field' => 'samstag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
			    'MM' => 'tx_praxisprojekclaas2_sd_sonntag_user_mm',
                'MM_opposite_field' => 'sonntag',
			    'size' => 10,
			    'autoSizeMax' => 30,
			    'maxitems' => 9999,
                'multiple' => 1,
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
    ],
];
