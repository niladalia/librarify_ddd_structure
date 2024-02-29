<?php

namespace ContainerLw4z37C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BRBK1_Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.bRBK_1.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bRBK_1.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookEditor' => ['privates', 'App\\Books\\Application\\Edit\\BookEditor', 'getBookEditorService', true],
        ], [
            'bookEditor' => 'App\\Books\\Application\\Edit\\BookEditor',
        ]);
    }
}