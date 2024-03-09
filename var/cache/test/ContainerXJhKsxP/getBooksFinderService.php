<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksFinderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Find\BooksFinder' shared autowired service.
     *
     * @return \App\Books\Application\Find\BooksFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Find/BooksFinder.php';

        return $container->privates['App\\Books\\Application\\Find\\BooksFinder'] = new \App\Books\Application\Find\BooksFinder(($container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] ?? $container->load('getDoctrineBookRepositoryService')));
    }
}
