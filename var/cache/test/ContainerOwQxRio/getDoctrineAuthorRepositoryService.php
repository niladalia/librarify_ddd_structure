<?php

namespace ContainerOwQxRio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineAuthorRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository' shared autowired service.
     *
     * @return \App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/src/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/LazyServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Authors/Infrastructure/Persistence/DoctrineAuthorRepository.php';

        return $container->privates['App\\Authors\\Infrastructure\\Persistence\\DoctrineAuthorRepository'] = new \App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
