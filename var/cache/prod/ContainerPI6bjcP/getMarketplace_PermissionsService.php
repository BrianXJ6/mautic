<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'marketplace.permissions' shared service.

return $this->services['marketplace.permissions'] = new \Mautic\MarketplaceBundle\Security\Permissions\MarketplacePermissions(($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['marketplace.service.config'] ?? $this->getMarketplace_Service_ConfigService()));
