<?php

use GeorgRinger\Uri2Link\Hooks\DataHandlerHook;

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['uri2link'] =
    DataHandlerHook::class;
