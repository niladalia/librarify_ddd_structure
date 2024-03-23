<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeleteFileService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Shared\Application\DeleteFile' shared autowired service.
     *
     * @return \App\Shared\Application\DeleteFile
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/DeleteFile.php';

        return $container->privates['App\\Shared\\Application\\DeleteFile'] = new \App\Shared\Application\DeleteFile(($container->privates['default.storage'] ?? $container->load('getDefault_StorageService')));
    }
}
