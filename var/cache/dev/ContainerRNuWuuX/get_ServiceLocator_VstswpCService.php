<?php

namespace ContainerRNuWuuX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VstswpCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vstswpC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vstswpC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController::__invoke' => ['privates', '.service_locator.QmvsV.i', 'get_ServiceLocator_QmvsV_IService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController::__invoke' => ['privates', '.service_locator.Ppccw9C', 'get_ServiceLocator_Ppccw9CService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController::__invoke' => ['privates', '.service_locator.51QoQMd', 'get_ServiceLocator_51QoQMdService', true],
            'App\\Books\\Infrastructure\\Controllers\\BookGetController::__invoke' => ['privates', '.service_locator.Smwf69k', 'get_ServiceLocator_Smwf69kService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController::__invoke' => ['privates', '.service_locator.wHVpYfE', 'get_ServiceLocator_WHVpYfEService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController::__invoke' => ['privates', '.service_locator.0zdjA.7', 'get_ServiceLocator_0zdjA_7Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController::__invoke' => ['privates', '.service_locator.2aYyOJg', 'get_ServiceLocator_2aYyOJgService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController::__invoke' => ['privates', '.service_locator.o_KbN5P', 'get_ServiceLocator_OKbN5PService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController::validate' => ['privates', '.service_locator.XtLJX52', 'get_ServiceLocator_XtLJX52Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController::__invoke' => ['privates', '.service_locator.bRBK_1.', 'get_ServiceLocator_BRBK1_Service', true],
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController::__invoke' => ['privates', '.service_locator.kAci.x3', 'get_ServiceLocator_KAci_X3Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController:__invoke' => ['privates', '.service_locator.QmvsV.i', 'get_ServiceLocator_QmvsV_IService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController' => ['privates', '.service_locator.QmvsV.i', 'get_ServiceLocator_QmvsV_IService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController:__invoke' => ['privates', '.service_locator.Ppccw9C', 'get_ServiceLocator_Ppccw9CService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController' => ['privates', '.service_locator.Ppccw9C', 'get_ServiceLocator_Ppccw9CService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController:__invoke' => ['privates', '.service_locator.51QoQMd', 'get_ServiceLocator_51QoQMdService', true],
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController' => ['privates', '.service_locator.51QoQMd', 'get_ServiceLocator_51QoQMdService', true],
            'App\\Books\\Infrastructure\\Controllers\\BookGetController:__invoke' => ['privates', '.service_locator.Smwf69k', 'get_ServiceLocator_Smwf69kService', true],
            'App\\Books\\Infrastructure\\Controllers\\BookGetController' => ['privates', '.service_locator.Smwf69k', 'get_ServiceLocator_Smwf69kService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController:__invoke' => ['privates', '.service_locator.wHVpYfE', 'get_ServiceLocator_WHVpYfEService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController' => ['privates', '.service_locator.wHVpYfE', 'get_ServiceLocator_WHVpYfEService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController:__invoke' => ['privates', '.service_locator.0zdjA.7', 'get_ServiceLocator_0zdjA_7Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController' => ['privates', '.service_locator.0zdjA.7', 'get_ServiceLocator_0zdjA_7Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController:__invoke' => ['privates', '.service_locator.2aYyOJg', 'get_ServiceLocator_2aYyOJgService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController' => ['privates', '.service_locator.2aYyOJg', 'get_ServiceLocator_2aYyOJgService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController:__invoke' => ['privates', '.service_locator.o_KbN5P', 'get_ServiceLocator_OKbN5PService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController' => ['privates', '.service_locator.o_KbN5P', 'get_ServiceLocator_OKbN5PService', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController:validate' => ['privates', '.service_locator.XtLJX52', 'get_ServiceLocator_XtLJX52Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController:__invoke' => ['privates', '.service_locator.bRBK_1.', 'get_ServiceLocator_BRBK1_Service', true],
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController' => ['privates', '.service_locator.bRBK_1.', 'get_ServiceLocator_BRBK1_Service', true],
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController:__invoke' => ['privates', '.service_locator.kAci.x3', 'get_ServiceLocator_KAci_X3Service', true],
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController' => ['privates', '.service_locator.kAci.x3', 'get_ServiceLocator_KAci_X3Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController::__invoke' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController::__invoke' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BookGetController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController::__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController::validate' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController::__invoke' => '?',
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController::__invoke' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController:__invoke' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsDeleteController' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController:__invoke' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsGetController' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController:__invoke' => '?',
            'App\\Authors\\Infrastructure\\Controllers\\AuthorsPostController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BookGetController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BookGetController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksDeleteController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksGetController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPatchController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPostController:validate' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController:__invoke' => '?',
            'App\\Books\\Infrastructure\\Controllers\\BooksPutController' => '?',
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController:__invoke' => '?',
            'App\\Isbn\\Intrastructure\\Controllers\\IsbnGetController' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
