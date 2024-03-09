<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_TemplateLinterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'maker.template_linter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\TemplateLinter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/TemplateLinter.php';

        return $container->privates['maker.template_linter'] = new \Symfony\Bundle\MakerBundle\Util\TemplateLinter($container->getEnv('default::string:MAKER_PHP_CS_FIXER_BINARY_PATH'), $container->getEnv('default::string:MAKER_PHP_CS_FIXER_CONFIG_PATH'));
    }
}
