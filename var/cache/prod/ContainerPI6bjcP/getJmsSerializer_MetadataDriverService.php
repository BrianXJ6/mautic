<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.metadata_driver' shared service.

$a = new \JMS\SerializerBundle\Debug\TraceableFileLocator(['Mautic\\AssetBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/AssetBundle/Entity'), 'Mautic\\CampaignBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CampaignBundle/Entity'), 'Mautic\\CategoryBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CategoryBundle/Entity'), 'Mautic\\ChannelBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/ChannelBundle/Entity'), 'Mautic\\CoreBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/CoreBundle/Entity'), 'Mautic\\DashboardBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/DashboardBundle/Entity'), 'Mautic\\DynamicContentBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/DynamicContentBundle/Entity'), 'Mautic\\EmailBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/EmailBundle/Entity'), 'Mautic\\FormBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/FormBundle/Entity'), 'Mautic\\LeadBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/LeadBundle/Entity'), 'Mautic\\NotificationBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/NotificationBundle/Entity'), 'Mautic\\PageBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/PageBundle/Entity'), 'Mautic\\PointBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/PointBundle/Entity'), 'Mautic\\ReportBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/ReportBundle/Entity'), 'Mautic\\SmsBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/SmsBundle/Entity'), 'Mautic\\StageBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/StageBundle/Entity'), 'Mautic\\UserBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/UserBundle/Entity'), 'Mautic\\WebhookBundle\\Entity' => (\dirname(__DIR__, 4).'/app/bundles/WebhookBundle/Entity'), 'MauticPlugin\\MauticSocialBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticSocialBundle/Entity'), 'MauticPlugin\\MauticTagManagerBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticTagManagerBundle/Entity'), 'MauticPlugin\\MauticFocusBundle\\Entity' => (\dirname(__DIR__, 4).'/plugins/MauticFocusBundle/Entity')]);
$b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('', false));
$c = ($this->privates['jms_serializer.type_parser'] ?? ($this->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser()));

return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver(new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([0 => ($this->services['jms_serializer.metadata.api_metadata_driver'] ?? ($this->services['jms_serializer.metadata.api_metadata_driver'] = new \Mautic\ApiBundle\Serializer\Driver\ApiMetadataDriver())), 1 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c), 2 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $b, $c)]), ($this->services['doctrine'] ?? $this->getDoctrineService()), $c), $c);
