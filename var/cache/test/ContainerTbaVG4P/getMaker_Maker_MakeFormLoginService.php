<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeFormLoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_form_login' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\Security\MakeFormLogin
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/Security/MakeFormLogin.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityControllerBuilder.php';

        return $container->privates['maker.maker.make_form_login'] = new \Symfony\Bundle\MakerBundle\Maker\Security\MakeFormLogin(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.security_config_updater'] ??= new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater()), ($container->privates['maker.security_controller_builder'] ??= new \Symfony\Bundle\MakerBundle\Security\SecurityControllerBuilder()));
    }
}
