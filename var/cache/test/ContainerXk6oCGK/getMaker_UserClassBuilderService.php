<?php

namespace ContainerXk6oCGK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_UserClassBuilderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.user_class_builder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Security\UserClassBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';

        return $container->privates['maker.user_class_builder'] = new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder();
    }
}