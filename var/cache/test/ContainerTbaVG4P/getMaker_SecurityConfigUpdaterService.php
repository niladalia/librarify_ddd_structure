<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_SecurityConfigUpdaterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.security_config_updater' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        return $container->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater();
    }
}
