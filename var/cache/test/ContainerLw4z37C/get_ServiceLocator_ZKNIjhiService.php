<?php

namespace ContainerLw4z37C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZKNIjhiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.zKNIjhi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zKNIjhi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookCreator' => ['privates', 'App\\Books\\Application\\Create\\BookCreator', 'getBookCreatorService', true],
            'formFactory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
        ], [
            'bookCreator' => 'App\\Books\\Application\\Create\\BookCreator',
            'formFactory' => '?',
        ]);
    }
}
