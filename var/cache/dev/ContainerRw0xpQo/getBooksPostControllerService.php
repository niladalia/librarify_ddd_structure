<?php

namespace ContainerRw0xpQo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksPostControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Books\Infrastructure\Controllers\BooksPostController' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Controllers\BooksPostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Controllers/BooksPostController.php';

        $container->services['App\\Books\\Infrastructure\\Controllers\\BooksPostController'] = $instance = new \App\Books\Infrastructure\Controllers\BooksPostController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Books\\Infrastructure\\Controllers\\BooksPostController', $container));

        return $instance;
    }
}
