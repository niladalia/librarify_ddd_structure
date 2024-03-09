<?php

namespace App\Shared\Application;

use App\Books\Domain\BookDeletedDomainEvent;
use App\Shared\Application\DeleteFile;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DeleteFileOnBookDelete implements EventSubscriberInterface
{
    public function __construct(private DeleteFile $deleteFile, private LoggerInterface $logger) {}

    public static function getSubscribedEvents(): array
    {
        return [
            BookDeletedDomainEvent::class => [
                ['__invoke', 0]
            ],
        ];
    }

    public function __invoke(BookDeletedDomainEvent $event)
    {
        $filename = $event->filename;
        
        if ($filename != null) {
            $this->deleteFile->__invoke($filename);
        } 
        
    }
}
