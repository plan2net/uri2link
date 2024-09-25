<?php

declare(strict_types=1);

use GeorgRinger\Uri2Link\Controller\AjaxController;

return [
    'uri2link_check' => [
        'path' => '/uri2link/check',
        'target' => AjaxController::class . '::checkAction'
    ],
];
