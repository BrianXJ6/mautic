<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'marketplace.command.list' shared service.

return $this->services['marketplace.command.list'] = new \Mautic\MarketplaceBundle\Command\ListCommand(($this->services['marketplace.service.plugin_collector'] ?? $this->load('getMarketplace_Service_PluginCollectorService.php')));
