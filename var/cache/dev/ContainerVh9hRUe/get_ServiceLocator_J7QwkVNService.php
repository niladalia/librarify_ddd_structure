<?php

namespace ContainerVh9hRUe;

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
            'getIsbn' => ['privates', '.errored..service_locator.J7QwkVN.App\\Service\\Isbn\\GetBookInfoByIsbn', NULL, 'Cannot autowire service ".service_locator.J7QwkVN": it references class "App\\Service\\Isbn\\GetBookInfoByIsbn" but no such service exists.'],
        ], [
            'getIsbn' => 'App\\Service\\Isbn\\GetBookInfoByIsbn',
        ]);
    }
}