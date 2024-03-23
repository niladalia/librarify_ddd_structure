<?php

namespace ContainerD829y5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ApiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/src/Security/ApiKeyAuthenticator.php';

        return $container->privates['security.authenticator.manager.api'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([($container->privates['App\\Security\\ApiKeyAuthenticator'] ??= new \App\Security\ApiKeyAuthenticator($container->getEnv('resolve:APP_API_TOKEN')))], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['debug.security.event_dispatcher.api'] ?? $container->load('getDebug_Security_EventDispatcher_ApiService')), 'api', ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true, true, []);
    }
}
