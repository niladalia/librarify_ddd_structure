<?php

namespace ContainerXJhKsxP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineCategoryRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Categories\Infrastructure\Persistence\DoctrineCategoryRepository' shared autowired service.
     *
     * @return \App\Categories\Infrastructure\Persistence\DoctrineCategoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/LazyServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Categories/Infrastructure/Persistence/DoctrineCategoryRepository.php';

        return $container->privates['App\\Categories\\Infrastructure\\Persistence\\DoctrineCategoryRepository'] = new \App\Categories\Infrastructure\Persistence\DoctrineCategoryRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
