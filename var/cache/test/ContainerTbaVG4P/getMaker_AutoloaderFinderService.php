<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoloaderFinderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.autoloader_finder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php';

        return $container->privates['maker.autoloader_finder'] = new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App');
    }
}
