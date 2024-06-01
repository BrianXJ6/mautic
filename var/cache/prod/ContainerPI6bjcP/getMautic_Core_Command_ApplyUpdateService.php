<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.core.command.apply_update' shared service.

return $this->services['mautic.core.command.apply_update'] = new \Mautic\CoreBundle\Command\ApplyUpdatesCommand(($this->services['translator.default'] ?? $this->getTranslator_DefaultService()), ($this->services['mautic.helper.core_parameters'] ?? ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))), ($this->services['mautic.update.step_provider'] ?? $this->load('getMautic_Update_StepProviderService.php')));
