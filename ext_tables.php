<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ANAL.PortfolioAnal',
            'Trainings',
            'catalogue de formation'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_anal') . '_trainings';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_anal/Configuration/FlexForms/flexform_trainings.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ANAL.PortfolioAnal',
            'Profile',
            'CVteque'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_anal') . '_profile';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_anal/Configuration/FlexForms/flexform_profile.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ANAL.PortfolioAnal',
            'Project',
            'Projects'
        );

        $pluginSignature = str_replace('_', '', 'portfolio_anal') . '_project';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfolio_anal/Configuration/FlexForms/flexform_project.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('portfolio_anal', 'Configuration/TypoScript', 'PortfolioANAL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_project', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_profile', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_profile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_profile');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_training', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_training.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_training');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_job', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_skill', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_social', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_social');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfolioanal_domain_model_category', 'EXT:portfolio_anal/Resources/Private/Language/locallang_csh_tx_portfolioanal_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfolioanal_domain_model_category');

    }
);
