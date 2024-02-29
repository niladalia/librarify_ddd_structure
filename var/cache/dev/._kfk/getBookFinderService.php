<?php

namespace ContainerKCpyeHu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFinderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Book\BookFinder' shared autowired service.
     *
     * @return \App\Service\Book\BookFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Book/BookFinder.php';

        return $container->privates['App\\Service\\Book\\BookFinder'] = new \App\Service\Book\BookFinder(($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')));
    }
}
