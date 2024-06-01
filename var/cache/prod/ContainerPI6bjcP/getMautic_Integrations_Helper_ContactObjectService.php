<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.integrations.helper.contact_object' shared service.

return $this->services['mautic.integrations.helper.contact_object'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\ObjectHelper\ContactObjectHelper(($this->services['mautic.lead.model.lead'] ?? $this->getMautic_Lead_Model_LeadService()), ($this->services['mautic.lead.repository.lead'] ?? $this->getMautic_Lead_Repository_LeadService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), ($this->services['mautic.lead.model.field'] ?? $this->getMautic_Lead_Model_FieldService()), ($this->services['mautic.lead.model.dnc'] ?? $this->load('getMautic_Lead_Model_DncService.php')), ($this->services['mautic.lead.model.company'] ?? $this->getMautic_Lead_Model_CompanyService()));
