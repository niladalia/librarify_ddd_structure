<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_XPW5g1Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.xPW5g_1' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.xPW5g_1'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['App\\Authors\\Application\\Create\\CreateAuthorCommandHandler'] ?? $container->load('getCreateAuthorCommandHandlerService')), []);
    }
}
