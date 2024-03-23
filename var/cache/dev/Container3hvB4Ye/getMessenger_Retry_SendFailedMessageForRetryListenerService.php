<?php

namespace Container3hvB4Ye;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Retry_SendFailedMessageForRetryListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.retry.send_failed_message_for_retry_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/SendFailedMessageForRetryListener.php';

        $a = ($container->privates['.service_locator.eMzz0PS'] ?? $container->load('get_ServiceLocator_EMzz0PSService'));

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['messenger.retry.send_failed_message_for_retry_listener'])) {
            return $container->privates['messenger.retry.send_failed_message_for_retry_listener'];
        }

        return $container->privates['messenger.retry.send_failed_message_for_retry_listener'] = new \Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener($a, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'amqp' => ['privates', 'messenger.retry.multiplier_retry_strategy.amqp', 'getMessenger_Retry_MultiplierRetryStrategy_AmqpService', true],
            'librarify_book_created_subscriber' => ['privates', 'messenger.retry.multiplier_retry_strategy.librarify_book_created_subscriber', 'getMessenger_Retry_MultiplierRetryStrategy_LibrarifyBookCreatedSubscriberService', true],
        ], [
            'amqp' => '?',
            'librarify_book_created_subscriber' => '?',
        ]), ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')), $b);
    }
}
