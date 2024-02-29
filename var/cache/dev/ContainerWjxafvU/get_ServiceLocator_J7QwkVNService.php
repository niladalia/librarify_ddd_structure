<?php

namespace ContainerWjxafvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J7QwkVNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J7QwkVN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J7QwkVN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'getIsbn' => ['privates', 'App\\Service\\Isbn\\GetBookInfoByIsbn', 'getGetBookInfoByIsbnService', true],
        ], [
            'getIsbn' => 'App\\Service\\Isbn\\GetBookInfoByIsbn',
        ]);
    }
}
