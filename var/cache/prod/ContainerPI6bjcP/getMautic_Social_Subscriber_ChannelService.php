<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.social.subscriber.channel' shared service.

return $this->services['mautic.social.subscriber.channel'] = new \MauticPlugin\MauticSocialBundle\EventListener\ChannelSubscriber(($this->services['mautic.helper.integration'] ?? $this->getMautic_Helper_IntegrationService()));
