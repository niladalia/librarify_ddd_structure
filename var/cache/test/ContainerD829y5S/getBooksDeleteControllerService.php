<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksDeleteControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Books\Infrastructure\Controllers\BooksDeleteController' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Controllers\BooksDeleteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Controllers/BooksDeleteController.php';

        $container->services['App\\Books\\Infrastructure\\Controllers\\BooksDeleteController'] = $instance = new \App\Books\Infrastructure\Controllers\BooksDeleteController();

        $instance->setContainer(($container->privates['.service_locator.wNFWkRy'] ?? $container->load('get_ServiceLocator_WNFWkRyService'))->withContext('App\\Books\\Infrastructure\\Controllers\\BooksDeleteController', $container));

        return $instance;
    }
}
