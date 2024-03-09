<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OKbN5PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o_KbN5P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o_KbN5P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookCreator' => ['privates', 'App\\Books\\Application\\Create\\BookCreator', 'getBookCreatorService', true],
        ], [
            'bookCreator' => 'App\\Books\\Application\\Create\\BookCreator',
        ]);
    }
}
