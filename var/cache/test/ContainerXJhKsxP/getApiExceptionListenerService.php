<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Shared\Infrastructure\Symfony\ApiExceptionListener' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Symfony\ApiExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Symfony/ApiExceptionListener.php';

        return $container->privates['App\\Shared\\Infrastructure\\Symfony\\ApiExceptionListener'] = new \App\Shared\Infrastructure\Symfony\ApiExceptionListener();
    }
}
