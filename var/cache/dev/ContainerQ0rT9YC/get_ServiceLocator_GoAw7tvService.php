<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GoAw7tv' shared service.

return $this->privates['.service_locator.GoAw7tv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'episode' => ['privates', '.errored..service_locator.GoAw7tv.App\\Entity\\Episode', NULL, 'Cannot autowire service ".service_locator.GoAw7tv": it references class "App\\Entity\\Episode" but no such service exists.'],
    'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
], [
    'episode' => 'App\\Entity\\Episode',
    'userRepository' => 'App\\Repository\\UserRepository',
]);
