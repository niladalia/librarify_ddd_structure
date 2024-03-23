<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCreatedDomainEventHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Infrastructure\Handlers\BookCreatedDomainEventHandler' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Handlers\BookCreatedDomainEventHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Handlers/BookCreatedDomainEventHandler.php';

        return $container->privates['App\\Books\\Infrastructure\\Handlers\\BookCreatedDomainEventHandler'] = new \App\Books\Infrastructure\Handlers\BookCreatedDomainEventHandler();
    }
}