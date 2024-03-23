<?php

namespace ContainerD829y5S;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCreatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Create\BookCreator' shared autowired service.
     *
     * @return \App\Books\Application\Create\BookCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Create/BookCreator.php';

        return $container->privates['App\\Books\\Application\\Create\\BookCreator'] = new \App\Books\Application\Create\BookCreator(($container->privates['App\\Books\\Application\\UploadFile\\BookFileUploader'] ?? $container->load('getFileUploaderService')), ($container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] ?? $container->load('getDoctrineBookRepositoryService')), ($container->privates['App\\Authors\\Application\\Find\\AuthorFinder'] ?? $container->load('getAuthorFinderService')), ($container->privates['App\\Shared\\Infrastructure\\Event\\RabbitMqEventBus'] ?? $container->load('getRabbitMqEventBusService')));
    }
}
