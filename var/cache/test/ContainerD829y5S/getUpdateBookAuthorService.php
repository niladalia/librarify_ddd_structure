<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateBookAuthorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Update\UpdateBookAuthor' shared autowired service.
     *
     * @return \App\Books\Application\Update\UpdateBookAuthor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Update/UpdateBookAuthor.php';

        return $container->privates['App\\Books\\Application\\Update\\UpdateBookAuthor'] = new \App\Books\Application\Update\UpdateBookAuthor(($container->privates['App\\Authors\\Application\\Find\\AuthorFinder'] ?? $container->load('getAuthorFinderService')));
    }
}
