<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating.twig.extension.button' shared service.

$a = ($this->services['mautic.helper.template.button'] ?? $this->load('getMautic_Helper_Template_ButtonService.php'));

if (isset($this->services['templating.twig.extension.button'])) {
    return $this->services['templating.twig.extension.button'];
}

return $this->services['templating.twig.extension.button'] = new \Mautic\CoreBundle\Templating\Twig\Extension\ButtonExtension($a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
