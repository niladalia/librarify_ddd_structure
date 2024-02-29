<?php

namespace ContainerLq1gUKi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WHVpYfEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wHVpYfE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wHVpYfE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'deleteBook' => ['privates', 'App\\Books\\Application\\Delete\\DeleteBook', 'getDeleteBookService', true],
        ], [
            'deleteBook' => 'App\\Books\\Application\\Delete\\DeleteBook',
        ]);
    }
}