<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryCreatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Categories\Application\Create\CategoryCreator' shared autowired service.
     *
     * @return \App\Categories\Application\Create\CategoryCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Categories/Application/Create/CategoryCreator.php';

        return $container->privates['App\\Categories\\Application\\Create\\CategoryCreator'] = new \App\Categories\Application\Create\CategoryCreator(($container->privates['App\\Categories\\Infrastructure\\Persistence\\DoctrineCategoryRepository'] ?? $container->load('getDoctrineCategoryRepositoryService')));
    }
}
