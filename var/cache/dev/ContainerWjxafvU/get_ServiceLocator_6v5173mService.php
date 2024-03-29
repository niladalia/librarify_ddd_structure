<?php

namespace ContainerWjxafvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6v5173mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6v5173m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6v5173m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'deleteBook' => ['privates', 'App\\Service\\Book\\DeleteBook', 'getDeleteBookService', true],
        ], [
            'deleteBook' => 'App\\Service\\Book\\DeleteBook',
        ]);
    }
}
