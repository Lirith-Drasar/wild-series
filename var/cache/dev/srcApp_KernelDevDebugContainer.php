<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNV5sbFu\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNV5sbFu/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNV5sbFu.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNV5sbFu\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNV5sbFu\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NV5sbFu',
    'container.build_id' => 'e46b39cc',
    'container.build_time' => 1578994768,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNV5sbFu');
