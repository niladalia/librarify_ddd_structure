<?php

namespace ContainerLw4z37C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeSerializerEncoderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php';

        return $container->privates['maker.maker.make_serializer_encoder'] = new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder();
    }
}
