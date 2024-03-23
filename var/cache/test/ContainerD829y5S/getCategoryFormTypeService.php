<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Categories\Application\Dto\CategoryFormType' shared autowired service.
     *
     * @return \App\Categories\Application\Dto\CategoryFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Categories/Application/Dto/CategoryFormType.php';

        return $container->privates['App\\Categories\\Application\\Dto\\CategoryFormType'] = new \App\Categories\Application\Dto\CategoryFormType();
    }
}
