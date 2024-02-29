<?php

namespace ContainerKCpyeHu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YtoqIvbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ytoqIvb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ytoqIvb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'booksFinder' => ['privates', 'App\\Service\\Book\\BooksFinder', 'getBooksFinderService', true],
        ], [
            'booksFinder' => 'App\\Service\\Book\\BooksFinder',
        ]);
    }
}
