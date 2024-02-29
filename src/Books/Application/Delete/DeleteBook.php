<?php

namespace App\Books\Application\Delete;

use App\Books\Application\Find\BookFinder;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;
use App\Books\Domain\BookNotFound;
use App\Books\Application\Delete\DeleteFile;

class DeleteBook
{
    public function __construct(
        private DoctrineBookRepository $bookRep,
        private DeleteFile $file_deleter,
        private BookFinder $bookFinder
    ) {
        $this->bookRep = $bookRep;
        $this->file_deleter = $file_deleter;
        $this->bookFinder = $bookFinder;
    }


    public function __invoke(string $id): void
    {
        $book = ($this->bookFinder)($id);
        if (!$book) {
            BookNotFound::throw();
        }
        if ($book->getImage() != null) {
            ($this->file_deleter)($book->getImage());
        }
        $this->bookRep->delete($book);
    }
}
