<?php

namespace ContainerOwQxRio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDefault_StorageService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'default.storage' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemOperator.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/CalculateChecksumFromStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Filesystem.php';

        return $container->privates['default.storage'] = new \League\Flysystem\Filesystem(($container->privates['flysystem.adapter.default.storage'] ?? $container->load('getFlysystem_Adapter_Default_StorageService')), ['visibility' => NULL, 'directory_visibility' => NULL, 'case_sensitive' => true, 'disable_asserts' => false, 'public_url' => NULL], NULL, NULL, NULL);
    }
}