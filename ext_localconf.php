<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ANAL.PortfolioAnal',
            'Trainings',
            [
                'Training' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Training' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ANAL.PortfolioAnal',
            'Profile',
            [
                'Profile' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Project' => '',
                'Profile' => '',
                'Training' => '',
                'Skill' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ANAL.PortfolioAnal',
            'Project',
            [
                'Project' => 'list, show, highlight, skills'
            ],
            // non-cacheable actions
            [
                'Project' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    trainings {
                        iconIdentifier = portfolio_anal-plugin-trainings
                        title = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_trainings.name
                        description = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_trainings.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioanal_trainings
                        }
                    }
                    profile {
                        iconIdentifier = portfolio_anal-plugin-profile
                        title = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_profile.name
                        description = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_profile.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioanal_profile
                        }
                    }
                    project {
                        iconIdentifier = portfolio_anal-plugin-project
                        title = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_project.name
                        description = LLL:EXT:portfolio_anal/Resources/Private/Language/locallang_db.xlf:tx_portfolio_anal_project.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfolioanal_project
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'portfolio_anal-plugin-trainings',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_anal/Resources/Public/Icons/user_plugin_trainings.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_anal-plugin-profile',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_anal/Resources/Public/Icons/user_plugin_profile.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfolio_anal-plugin-project',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfolio_anal/Resources/Public/Icons/user_plugin_project.svg']
			);
		
    }
);
