<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteBookService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Delete\DeleteBook' shared autowired service.
     *
     * @return \App\Books\Application\Delete\DeleteBook
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Delete/DeleteBook.php';

        $a = ($container->privates['App\\Shared\\Infrastructure\\Event\\RabbitMqEventBus'] ?? $container->load('getRabbitMqEventBusService'));

        if (isset($container->privates['App\\Books\\Application\\Delete\\DeleteBook'])) {
            return $container->privates['App\\Books\\Application\\Delete\\DeleteBook'];
        }

        return $container->privates['App\\Books\\Application\\Delete\\DeleteBook'] = new \App\Books\Application\Delete\DeleteBook(($container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] ?? $container->load('getDoctrineBookRepositoryService')), ($container->privates['App\\Shared\\Application\\DeleteFile'] ?? $container->load('getDeleteFileService')), ($container->privates['App\\Books\\Domain\\BookFinder'] ?? $container->load('getBookFinder2Service')), $a);
    }
}
