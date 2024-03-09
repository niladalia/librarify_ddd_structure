<?php

namespace App\Books\Domain;

use App\Books\Domain\Book;
use App\Books\Domain\BookNotFound;
use App\Books\Domain\BookRepository;
use Ramsey\Uuid\Uuid;

class BookFinder
{
    public function __construct(private BookRepository $bookRep) {}


    public function __invoke(string $id): Book
    {
        $book = $this->bookRep->search(Uuid::fromString($id));

        if (!$book) {
            BookNotFound::throw($id);
        }
        return $book;
    }
}
