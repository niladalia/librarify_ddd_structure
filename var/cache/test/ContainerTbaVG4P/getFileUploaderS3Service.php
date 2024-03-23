<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploaderS3Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\BookFileUploader\Application\FileUploaderS3' shared autowired service.
     *
     * @return \App\BookFileUploader\Application\FileUploaderS3
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/BookFileUploader/Domain/BookFileUploaderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/FileUploader/Application/FileUploaderS3.php';

        return $container->privates['App\\BookFileUploader\\Application\\FileUploaderS3'] = new \App\FileUploader\Application\FileUploaderS3(($container->privates['default.storage'] ?? $container->load('getDefault_StorageService')));
    }
}