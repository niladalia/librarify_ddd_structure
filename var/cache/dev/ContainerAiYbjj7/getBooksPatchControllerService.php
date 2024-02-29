<?php

namespace ContainerAiYbjj7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBooksPatchControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Books\Infrastructure\Controllers\BooksPatchController' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Controllers\BooksPatchController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Controllers/BooksPatchController.php';

        $container->services['App\\Books\\Infrastructure\\Controllers\\BooksPatchController'] = $instance = new \App\Books\Infrastructure\Controllers\BooksPatchController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Books\\Infrastructure\\Controllers\\BooksPatchController', $container));

        return $instance;
    }
}
