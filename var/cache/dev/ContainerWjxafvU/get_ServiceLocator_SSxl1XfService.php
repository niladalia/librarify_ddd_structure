<?php

namespace ContainerWjxafvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SSxl1XfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sSxl1Xf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sSxl1Xf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookFieldUpdater' => ['privates', 'App\\Service\\Book\\BookFieldUpdater', NULL, 'Cannot autowire service "App\\Service\\Book\\BookFieldUpdater": argument "$bookFinder" of method "__construct()" references class "App\\Service\\Book\\bookFinder" but no such service exists. Did you mean "App\\Service\\Book\\BookFinder"?'],
        ], [
            'bookFieldUpdater' => 'App\\Service\\Book\\BookFieldUpdater',
        ]);
    }
}