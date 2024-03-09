<?php

namespace ContainerOwQxRio;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBookFormTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Books\Application\Dto\BookFormType' shared autowired service.
     *
     * @return \App\Books\Application\Dto\BookFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Books/Application/Dto/BookFormType.php';

        return $container->privates['App\\Books\\Application\\Dto\\BookFormType'] = new \App\Books\Application\Dto\BookFormType();
    }
}
