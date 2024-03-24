<?php

namespace App\Books\Domain;

use App\Books\Domain\Book;
use App\Books\Domain\BookNotFound;
use App\Books\Domain\BookRepository;
use Ramsey\Uuid\Uuid;

class BookFinder
{
    public function __construct(private BookRepository $bookRep) {}


    public function __invoke(BookId $bookId): Book
    {
        $book = $this->bookRep->search($bookId);

        if (!$book) {
            BookNotFound::throw($bookId->getValue());
        }
        return $book;
    }
}
