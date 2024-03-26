<?php

namespace App\Books\Application\Create;

use App\Books\Domain\BookCreatedDomainEvent;
use App\Books\Application\Find\BookFinder;
use App\Books\Domain\BookId;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class BookCreatedEventSubscriber implements EventSubscriberInterface
{
    public function __construct(private BookFinder $BookFinder, private LoggerInterface $logger) {}

    public static function getSubscribedEvents(): array
    {
        return [
            BookCreatedDomainEvent::class => [
                ['logCreation', 0],
                ['sendMail', 10]
            ],
        ];
    }

    public function logCreation(BookCreatedDomainEvent $event)
    {

        // Not working because EventBus is implemented by RabbitMQ
        $book = ($this->BookFinder)(new BookId($event->id()));
        $this->logger->info("EVENT SUBSCRIBER !!!!!");
        $this->logger->info(sprintf('Book Created: %s', $book->title()->getValue()));
    }

    public function sendMail(BookCreatedDomainEvent $event)
    {
        // ...
    }
}
