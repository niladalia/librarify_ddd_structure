<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_51QoQMdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.51QoQMd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.51QoQMd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commandBus' => ['services', 'messenger.default_bus', 'getMessenger_DefaultBusService', false],
        ], [
            'commandBus' => '?',
        ]);
    }
}
