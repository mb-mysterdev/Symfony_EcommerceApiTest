<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJhiXf2F\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJhiXf2F/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJhiXf2F.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJhiXf2F\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJhiXf2F\App_KernelDevDebugContainer([
    'container.build_hash' => 'JhiXf2F',
    'container.build_id' => '2382057c',
    'container.build_time' => 1592420563,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJhiXf2F');
