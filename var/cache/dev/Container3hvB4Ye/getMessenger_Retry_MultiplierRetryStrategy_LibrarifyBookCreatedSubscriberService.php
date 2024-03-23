<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_MultiplierRetryStrategy_LibrarifyBookCreatedSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.multiplier_retry_strategy.librarify_book_created_subscriber' shared service.
     *
     * @return \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/RetryStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Retry/MultiplierRetryStrategy.php';

        return $container->privates['messenger.retry.multiplier_retry_strategy.librarify_book_created_subscriber'] = new \Symfony\Component\Messenger\Retry\MultiplierRetryStrategy(5, 1000, 2, 0);
    }
}
