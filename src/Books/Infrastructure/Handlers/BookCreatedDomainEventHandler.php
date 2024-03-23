<?php
namespace App\Books\Infrastructure\Handlers;

use App\Books\Domain\BookCreatedDomainEvent;
use App\Shared\Domain\Event\DomainEvent;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler(bus: 'messenger.bus.event.async', fromTransport: 'librarify_book_created_subscriber', priority: 10)]

class BookCreatedDomainEventHandler 
{
    
    public function __construct() { }

    public function __invoke(BookCreatedDomainEvent $event)
    {
        $myfile = fopen("/var/www/librarify/var/log/book_created_event.txt", "a") or die("Unable to open file!");
        fwrite($myfile, sprintf("LISTENER Working !!!  \n %s\n",json_encode($event->serialize())));
        fclose($myfile);
    }
}