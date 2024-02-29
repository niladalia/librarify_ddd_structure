<?php

namespace ContainerXk6oCGK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorsFinderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Authors\Application\Find\AuthorsFinder' shared autowired service.
     *
     * @return \App\Authors\Application\Find\AuthorsFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Authors/Application/Find/AuthorsFinder.php';

        return $container->privates['App\\Authors\\Application\\Find\\AuthorsFinder'] = new \App\Authors\Application\Find\AuthorsFinder(($container->privates['App\\Authors\\Infrastructure\\Persistence\\DoctrineAuthorRepository'] ?? $container->load('getDoctrineAuthorRepositoryService')));
    }
}
