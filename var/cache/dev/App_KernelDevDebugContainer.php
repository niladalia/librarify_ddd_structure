<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerR4CXhpr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerR4CXhpr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerR4CXhpr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerR4CXhpr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerR4CXhpr\App_KernelDevDebugContainer([
    'container.build_hash' => 'R4CXhpr',
    'container.build_id' => '3c9133ff',
    'container.build_time' => 1710009333,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerR4CXhpr');
