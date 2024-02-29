<?php

namespace ContainerRw0xpQo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorCreatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Authors\Application\Create\AuthorCreator' shared autowired service.
     *
     * @return \App\Authors\Application\Create\AuthorCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Authors/Application/Create/AuthorCreator.php';

        return $container->privates['App\\Authors\\Application\\Create\\AuthorCreator'] = new \App\Authors\Application\Create\AuthorCreator(($container->privates['App\\Authors\\Infrastructure\\Persistence\\DoctrineAuthorRepository'] ?? $container->load('getDoctrineAuthorRepositoryService')));
    }
}
