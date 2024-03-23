<?php

namespace ContainerTbaVG4P;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Security_RequestMatcher_Vhy2oy3Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.security.request_matcher.vhy2oy3' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\ChainRequestMatcher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/ChainRequestMatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher/PathRequestMatcher.php';

        return $container->privates['.security.request_matcher.vhy2oy3'] = new \Symfony\Component\HttpFoundation\ChainRequestMatcher([($container->privates['.security.request_matcher.AMZT15Y'] ??= new \Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher('^/api'))]);
    }
}
