<?php

namespace ContainerRNuWuuX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteAuthorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Authors\Application\Delete\DeleteAuthor' shared autowired service.
     *
     * @return \App\Authors\Application\Delete\DeleteAuthor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Authors/Application/Delete/DeleteAuthor.php';

        return $container->privates['App\\Authors\\Application\\Delete\\DeleteAuthor'] = new \App\Authors\Application\Delete\DeleteAuthor(($container->privates['App\\Authors\\Infrastructure\\Persistence\\DoctrineAuthorRepository'] ?? $container->load('getDoctrineAuthorRepositoryService')));
    }
}
