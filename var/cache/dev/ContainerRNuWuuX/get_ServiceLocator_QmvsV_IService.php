<?php

namespace ContainerRNuWuuX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QmvsV_IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QmvsV.i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QmvsV.i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authorsFinder' => ['privates', 'App\\Authors\\Application\\Find\\AuthorFinder', 'getAuthorFinderService', true],
            'deleteAuthor' => ['privates', 'App\\Authors\\Application\\Delete\\DeleteAuthor', 'getDeleteAuthorService', true],
        ], [
            'authorsFinder' => 'App\\Authors\\Application\\Find\\AuthorFinder',
            'deleteAuthor' => 'App\\Authors\\Application\\Delete\\DeleteAuthor',
        ]);
    }
}
