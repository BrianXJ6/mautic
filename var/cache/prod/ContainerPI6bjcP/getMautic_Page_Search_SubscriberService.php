<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.page.search.subscriber' shared service.

return $this->services['mautic.page.search.subscriber'] = new \Mautic\PageBundle\EventListener\SearchSubscriber(($this->services['mautic.helper.user'] ?? $this->getMautic_Helper_UserService()), ($this->services['mautic.page.model.page'] ?? $this->getMautic_Page_Model_PageService()), ($this->services['mautic.security'] ?? $this->getMautic_SecurityService()), ($this->services['mautic.helper.templating'] ?? ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(($this->services['kernel'] ?? $this->get('kernel', 1))))));
