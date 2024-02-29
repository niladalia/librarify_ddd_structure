<?php

namespace App\Books\Application\Find;

use App\Books\Domain\Books;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;

class BooksFinder
{
    private $book_rep;

    public function __construct(DoctrineBookRepository $book_rep)
    {
        $this->book_rep = $book_rep;
    }


    public function __invoke(): Books
    {
        $books = $this->book_rep->find_all();

        return $books;
    }
}
