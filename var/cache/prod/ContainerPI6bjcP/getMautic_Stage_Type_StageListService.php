<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.stage.type.stage_list' shared service.

return $this->services['mautic.stage.type.stage_list'] = new \Mautic\StageBundle\Form\Type\StageListType(($this->services['mautic.stage.model.stage'] ?? $this->load('getMautic_Stage_Model_StageService.php')));
