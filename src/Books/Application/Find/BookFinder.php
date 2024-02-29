<?php

namespace App\Books\Application\Find;

use App\Books\Domain\Book;
use App\Books\Domain\BookNotFound;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;
use Ramsey\Uuid\Uuid;

class BookFinder
{
    private $book_rep;

    public function __construct(DoctrineBookRepository $book_rep)
    {
        $this->book_rep = $book_rep;
    }


    public function __invoke(string $id): ?Book
    {
        $book = $this->book_rep->find(Uuid::fromString($id));
        if (!$book) {
            BookNotFound::throw($id);
        }
        return $book;
    }
}
