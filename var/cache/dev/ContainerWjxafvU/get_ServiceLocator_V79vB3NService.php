<?php

namespace ContainerWjxafvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V79vB3NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v79vB3N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v79vB3N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookCreator' => ['privates', 'App\\Service\\Book\\BookCreator', 'getBookCreatorService', true],
        ], [
            'bookCreator' => 'App\\Service\\Book\\BookCreator',
        ]);
    }
}
