<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFinder2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Domain\BookFinder' shared autowired service.
     *
     * @return \App\Books\Domain\BookFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Domain/BookFinder.php';

        return $container->privates['App\\Books\\Domain\\BookFinder'] = new \App\Books\Domain\BookFinder(($container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] ?? $container->load('getDoctrineBookRepositoryService')));
    }
}
