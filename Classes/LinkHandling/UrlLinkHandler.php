<?php
declare(strict_types=1);

namespace GeorgRinger\Uri2Link\LinkHandling;

use Psr\Http\Message\ServerRequestInterface;

class UrlLinkHandler extends \TYPO3\CMS\Backend\LinkHandler\UrlLinkHandler
{
    public function render(ServerRequestInterface $request): string
    {
        $this->pageRenderer->loadJavaScriptModule('@typo3/backend/better-url-link-handler.js');
        $this->view->assign('url', !empty($this->linkParts) ? $this->linkParts['url'] : '');
        return $this->view->render('LinkBrowser/Url');
    }
}
