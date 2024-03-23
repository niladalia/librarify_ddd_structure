<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFileUploaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\UploadFile\BookFileUploader' shared autowired service.
     *
     * @return \App\Books\Application\UploadFile\BookFileUploader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Books/Application/UploadFile/BookFileUploader.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Domain/BookFileUploaderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Infrastructure/Uploader/S3BookFileUploader.php';

        return $container->privates['App\\Books\\Application\\UploadFile\\BookFileUploader'] = new \App\Books\Application\UploadFile\BookFileUploader(new \App\Books\Infrastructure\Uploader\S3BookFileUploader(($container->privates['default.storage'] ?? $container->load('getDefault_StorageService'))));
    }
}