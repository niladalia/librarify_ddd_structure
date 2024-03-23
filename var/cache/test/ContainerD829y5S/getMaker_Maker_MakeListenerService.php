<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_listener' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeListener.php';

        return $container->privates['maker.maker.make_listener'] = new \Symfony\Bundle\MakerBundle\Maker\MakeListener(($container->privates['maker.event_registry'] ?? $container->load('getMaker_EventRegistryService')));
    }
}
