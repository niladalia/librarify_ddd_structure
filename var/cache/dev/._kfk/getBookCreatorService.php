<?php

namespace ContainerKCpyeHu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookCreatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Book\BookCreator' shared autowired service.
     *
     * @return \App\Service\Book\BookCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Book/BookCreator.php';

        $a = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Service\\Book\\BookCreator'])) {
            return $container->privates['App\\Service\\Book\\BookCreator'];
        }

        return $container->privates['App\\Service\\Book\\BookCreator'] = new \App\Service\Book\BookCreator(($container->privates['App\\Service\\FileUploader\\FileUploaderS3'] ?? $container->load('getFileUploaderS3Service')), ($container->privates['App\\Repository\\BookRepository'] ?? $container->load('getBookRepositoryService')), ($container->privates['App\\Authors\\Application\\Find\\AuthorFinder'] ?? $container->load('getAuthorFinderService')), $a);
    }
}
