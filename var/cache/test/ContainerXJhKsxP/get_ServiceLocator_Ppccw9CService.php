<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ppccw9CService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.Ppccw9C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ppccw9C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authorsFinder' => ['privates', 'App\\Authors\\Application\\Find\\AuthorsFinder', 'getAuthorsFinderService', true],
        ], [
            'authorsFinder' => 'App\\Authors\\Application\\Find\\AuthorsFinder',
        ]);
    }
}
