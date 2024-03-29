<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFinderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Find\BookFinder' shared autowired service.
     *
     * @return \App\Books\Application\Find\BookFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Find/BookFinder.php';

        return $container->privates['App\\Books\\Application\\Find\\BookFinder'] = new \App\Books\Application\Find\BookFinder(($container->privates['App\\Books\\Domain\\BookFinder'] ?? $container->load('getBookFinder2Service')));
    }
}
