<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZb07Mx2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZb07Mx2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZb07Mx2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZb07Mx2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZb07Mx2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Zb07Mx2',
    'container.build_id' => '602045e0',
    'container.build_time' => 1575970481,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZb07Mx2');
