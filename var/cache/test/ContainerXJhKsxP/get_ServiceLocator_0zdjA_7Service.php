<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0zdjA_7Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.0zdjA.7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0zdjA.7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'booksFinder' => ['privates', 'App\\Books\\Application\\Find\\BooksFinder', 'getBooksFinderService', true],
        ], [
            'booksFinder' => 'App\\Books\\Application\\Find\\BooksFinder',
        ]);
    }
}
