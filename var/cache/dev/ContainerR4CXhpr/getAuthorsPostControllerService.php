<?php

namespace ContainerR4CXhpr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorsPostControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Authors\Infrastructure\Controllers\AuthorsPostController' shared autowired service.
     *
     * @return \App\Authors\Infrastructure\Controllers\AuthorsPostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Authors/Infrastructure/Controllers/AuthorsPostController.php';

        $container->services['App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController'] = $instance = new \App\Authors\Infrastructure\Controllers\AuthorsPostController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController', $container));

        return $instance;
    }
}
