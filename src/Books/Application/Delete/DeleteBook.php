<?php

namespace App\Books\Application\Delete;

use App\Books\Domain\BookRepository;
use App\Books\Domain\BookDeletedDomainEvent;
use App\Books\Domain\BookFinder;
use App\Shared\Application\DeleteFile;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DeleteBook
{
    public function __construct(
        private BookRepository $bookRep,
        private DeleteFile $file_deleter,
        private BookFinder $bookFinder,
        private EventDispatcherInterface $eventDispatcher
    ) {
        $this->bookRep = $bookRep;
        $this->file_deleter = $file_deleter;
        $this->bookFinder = $bookFinder;
        $this->eventDispatcher = $eventDispatcher;
    }


    public function __invoke(string $id): void
    {
        
        $book = ($this->bookFinder)($id);

        $book->addDomainEvent(
            new BookDeletedDomainEvent(
                $book->getId(),
                $book->getImage(),
                $book->getAuthor() ? $book->getAuthor()->getId()->serialize() : null
            )
        );          
        $this->bookRep->delete($book);

        $this->eventDispatcher->dispatch(...$book->pullDomainEvents());      
    }   
}
