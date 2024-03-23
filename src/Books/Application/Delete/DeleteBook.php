<?php

namespace App\Books\Application\Delete;

use App\Books\Domain\BookRepository;
use App\Books\Domain\BookDeletedDomainEvent;
use App\Books\Domain\BookFinder;
use App\Shared\Application\DeleteFile;
use App\Shared\Domain\Event\DomainEvent;
use App\Shared\Domain\Event\EventBus;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DeleteBook
{
    public function __construct(
        private BookRepository $bookRep,
        private DeleteFile $file_deleter,
        private BookFinder $bookFinder,
        private EventBus $bus
    ) {
        $this->bookRep = $bookRep;
        $this->file_deleter = $file_deleter;
        $this->bookFinder = $bookFinder;
        $this->bus = $bus;
    }


    public function __invoke(string $id): void
    {
        
        $book = ($this->bookFinder)($id);

        $book->addDomainEvent(
            new BookDeletedDomainEvent(
                $book->getId()->getValue()
            )
        );          
       // $this->bookRep->delete($book);

        $this->bus->publish(...$book->pullDomainEvents());      
    }  
}
