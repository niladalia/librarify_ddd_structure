<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorFinderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Authors\Application\Find\AuthorFinder' shared autowired service.
     *
     * @return \App\Authors\Application\Find\AuthorFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Authors/Application/Find/AuthorFinder.php';

        return $container->privates['App\\Authors\\Application\\Find\\AuthorFinder'] = new \App\Authors\Application\Find\AuthorFinder(($container->privates['App\\Authors\\Infrastructure\\Persistence\\DoctrineAuthorRepository'] ?? $container->load('getDoctrineAuthorRepositoryService')));
    }
}
