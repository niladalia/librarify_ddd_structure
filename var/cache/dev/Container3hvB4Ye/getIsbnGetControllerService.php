<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIsbnGetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Isbn\Intrastructure\Controllers\IsbnGetController' shared autowired service.
     *
     * @return \App\Isbn\Intrastructure\Controllers\IsbnGetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Isbn/Intrastructure/Controllers/IsbnGetController.php';

        $container->services['App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController'] = $instance = new \App\Isbn\Intrastructure\Controllers\IsbnGetController();

        $instance->setContainer(($container->privates['.service_locator.tW66Q7g'] ?? $container->load('get_ServiceLocator_TW66Q7gService'))->withContext('App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController', $container));

        return $instance;
    }
}