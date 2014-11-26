<?php

defined('TYPO3_MODE') or die();

$tempColumns = array(
    'tx_cssselect_stylesheets' => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:css_select/Resources/Private/Language/locallang_db.xml:pages.tx_cssselect_stylesheets',
        'config'  => array(
            'type'          => 'select',
            'items'         => array(),
            'itemsProcFunc' => 'Cnerta\\CssSelect\\Backend\\HandleStylesheets->main',
            'size'          => 10,
            'maxitems'      => 10,
            'iconsInOptionTags' => true
        )
    ),
    'tx_cssselect_inheritance' => array(
        'exclude' => 1,
        'label'   => 'LLL:EXT:css_select/Resources/Private/Language/locallang_db.xml:pages.tx_cssselect_inheritance',
        'config'  => array(
            'type'          => 'select',
            'items'         => array(
                array(
                    'LLL:EXT:css_select/Resources/Private/Language/locallang_db.xml:pages.tx_cssselect_inheritance.I.0',
                    0
                ),
                array(
                    'LLL:EXT:css_select/Resources/Private/Language/locallang_db.xml:pages.tx_cssselect_inheritance.I.1',
                    1
                ),
                array(
                    'LLL:EXT:css_select/Resources/Private/Language/locallang_db.xml:pages.tx_cssselect_inheritance.I.2',
                    2
                )
            ),
            'size'          => 1,
            'maxitems'      => 1
        )
    )
);

// Adds the fields to the 'pages' TCA
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'pages', $tempColumns, true );

// Adds the fields to all types of the 'pages' table
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes( 'pages', 'tx_cssselect_stylesheets;;;;1-1-1, tx_cssselect_inheritance', '', 'before:content_from_pid');

// Unsets the temporary variables to clean up the global space
unset( $tempColumns );
