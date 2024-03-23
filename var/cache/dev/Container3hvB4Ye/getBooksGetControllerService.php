<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksGetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Books\Infrastructure\Controllers\BooksGetController' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Controllers\BooksGetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Controllers/BooksGetController.php';

        $container->services['App\\Books\\Infrastructure\\Controllers\\BooksGetController'] = $instance = new \App\Books\Infrastructure\Controllers\BooksGetController();

        $instance->setContainer(($container->privates['.service_locator.tW66Q7g'] ?? $container->load('get_ServiceLocator_TW66Q7gService'))->withContext('App\\Books\\Infrastructure\\Controllers\\BooksGetController', $container));

        return $instance;
    }
}
