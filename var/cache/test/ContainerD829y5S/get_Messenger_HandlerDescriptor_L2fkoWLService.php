<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_L2fkoWLService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.L2fkoWL' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/process/Messenger/RunProcessMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.L2fkoWL'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['process.messenger.process_message_handler'] ??= new \Symfony\Component\Process\Messenger\RunProcessMessageHandler()), []);
    }
}
