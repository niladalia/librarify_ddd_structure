<?php

namespace ContainerKCpyeHu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCreatedEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\Book\BookCreatedEventSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\Book\BookCreatedEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/Book/BookCreatedEventSubscriber.php';

        return $container->privates['App\\EventSubscriber\\Book\\BookCreatedEventSubscriber'] = new \App\EventSubscriber\Book\BookCreatedEventSubscriber(($container->privates['App\\Service\\Book\\BookFinder'] ?? $container->load('getBookFinderService')), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));
    }
}