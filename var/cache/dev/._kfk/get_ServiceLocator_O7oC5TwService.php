<?php

namespace ContainerKCpyeHu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O7oC5TwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O7oC5Tw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O7oC5Tw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'author_creator' => ['privates', 'App\\Authors\\Application\\Create\\AuthorCreator', 'getAuthorCreatorService', true],
        ], [
            'author_creator' => 'App\\Authors\\Application\\Create\\AuthorCreator',
        ]);
    }
}
