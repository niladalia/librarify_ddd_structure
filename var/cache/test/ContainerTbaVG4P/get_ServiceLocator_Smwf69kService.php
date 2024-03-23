<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Smwf69kService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.Smwf69k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Smwf69k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookFinder' => ['privates', 'App\\Books\\Application\\Find\\BookFinder', 'getBookFinderService', true],
        ], [
            'bookFinder' => 'App\\Books\\Application\\Find\\BookFinder',
        ]);
    }
}
