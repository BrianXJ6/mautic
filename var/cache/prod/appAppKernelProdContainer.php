<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPI6bjcP\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPI6bjcP/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerPI6bjcP.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerPI6bjcP\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerPI6bjcP\appAppKernelProdContainer([
    'container.build_hash' => 'PI6bjcP',
    'container.build_id' => '92dbcb75',
    'container.build_time' => 1717198411,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPI6bjcP');
