<?php

namespace ContainerLw4z37C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFieldUpdaterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Update\BookFieldUpdater' shared autowired service.
     *
     * @return \App\Books\Application\Update\BookFieldUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Update/BookFieldUpdater.php';

        return $container->privates['App\\Books\\Application\\Update\\BookFieldUpdater'] = new \App\Books\Application\Update\BookFieldUpdater(($container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] ?? $container->load('getDoctrineBookRepositoryService')), ($container->privates['App\\Books\\Application\\Find\\BookFinder'] ?? $container->load('getBookFinderService')), ($container->privates['App\\Books\\Application\\Update\\UpdateBookAuthor'] ?? $container->load('getUpdateBookAuthorService')));
    }
}
