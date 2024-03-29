<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KAci_X3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kAci.x3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kAci.x3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'getIsbn' => ['privates', 'App\\Isbn\\Application\\GetBookInfoByIsbn', 'getGetBookInfoByIsbnService', true],
        ], [
            'getIsbn' => 'App\\Isbn\\Application\\GetBookInfoByIsbn',
        ]);
    }
}
