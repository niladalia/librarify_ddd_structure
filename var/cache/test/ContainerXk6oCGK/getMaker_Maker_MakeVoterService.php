<?php

namespace ContainerXk6oCGK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeVoterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

        return $container->privates['maker.maker.make_voter'] = new \Symfony\Bundle\MakerBundle\Maker\MakeVoter();
    }
}
