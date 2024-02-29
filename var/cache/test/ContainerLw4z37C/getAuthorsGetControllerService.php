<?php

namespace ContainerLw4z37C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorsGetControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Authors\Infrastructure\Controllers\AuthorsGetController' shared autowired service.
     *
     * @return \App\Authors\Infrastructure\Controllers\AuthorsGetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Authors/Infrastructure/Controllers/AuthorsGetController.php';

        $container->services['App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController'] = $instance = new \App\Authors\Infrastructure\Controllers\AuthorsGetController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController', $container));

        return $instance;
    }
}
