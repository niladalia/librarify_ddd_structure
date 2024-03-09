<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCreatedEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Create\BookCreatedEventSubscriber' shared autowired service.
     *
     * @return \App\Books\Application\Create\BookCreatedEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Create/BookCreatedEventSubscriber.php';

        return $container->privates['App\\Books\\Application\\Create\\BookCreatedEventSubscriber'] = new \App\Books\Application\Create\BookCreatedEventSubscriber(($container->privates['App\\Books\\Application\\Find\\BookFinder'] ?? $container->load('getBookFinderService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}
