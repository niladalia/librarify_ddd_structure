<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorsDeleteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Authors\Infrastructure\Controllers\AuthorsDeleteController' shared autowired service.
     *
     * @return \App\Authors\Infrastructure\Controllers\AuthorsDeleteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Authors/Infrastructure/Controllers/AuthorsDeleteController.php';

        $container->services['App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController'] = $instance = new \App\Authors\Infrastructure\Controllers\AuthorsDeleteController();

        $instance->setContainer(($container->privates['.service_locator.tW66Q7g'] ?? $container->load('get_ServiceLocator_TW66Q7gService'))->withContext('App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController', $container));

        return $instance;
    }
}
