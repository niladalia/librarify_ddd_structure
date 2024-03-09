<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XtLJX52Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.XtLJX52' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XtLJX52'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'constraint' => ['privates', '.errored..service_locator.XtLJX52.Symfony\\Component\\Validator\\Constraints\\Collection', NULL, 'Cannot autowire service ".service_locator.XtLJX52": it references class "Symfony\\Component\\Validator\\Constraints\\Collection" but no such service exists.'],
        ], [
            'constraint' => 'Symfony\\Component\\Validator\\Constraints\\Collection',
        ]);
    }
}
