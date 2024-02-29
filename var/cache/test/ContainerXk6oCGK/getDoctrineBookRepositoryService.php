<?php

namespace ContainerXk6oCGK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineBookRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Infrastructure\Persistence\DoctrineBookRepository' shared autowired service.
     *
     * @return \App\Books\Infrastructure\Persistence\DoctrineBookRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/LazyServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Persistence/DoctrineBookRepository.php';

        return $container->privates['App\\Books\\Infrastructure\\Persistence\\DoctrineBookRepository'] = new \App\Books\Infrastructure\Persistence\DoctrineBookRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
