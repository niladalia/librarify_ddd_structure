<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_IUbUdbyService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.iUbUdby' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Handlers/BookCreatedDomainEventHandler.php';

        return $container->privates['.messenger.handler_descriptor.iUbUdby'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['App\\Books\\Infrastructure\\Handlers\\BookCreatedDomainEventHandler'] ??= new \App\Books\Infrastructure\Handlers\BookCreatedDomainEventHandler())->__invoke(...), ['bus' => 'messenger.bus.event.async', 'priority' => 10, 'from_transport' => 'librarify_book_created_subscriber']);
    }
}
