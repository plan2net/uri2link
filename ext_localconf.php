<?php

use GeorgRinger\Uri2Link\Hooks\DataHandlerHook;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['uri2link'] =
    DataHandlerHook::class;

ExtensionManagementUtility::addPageTSConfig('
    TCEMAIN.linkHandler {
        url {
            handler = GeorgRinger\Uri2Link\LinkHandling\UrlLinkHandler
        }

    }
');
