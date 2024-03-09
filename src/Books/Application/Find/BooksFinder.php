<?php

namespace App\Books\Application\Find;

use App\Books\Domain\Books;
use App\Books\Domain\BookRepository;

class BooksFinder
{
    private $book_rep;

    public function __construct(BookRepository $book_rep)
    {
        $this->book_rep = $book_rep;
    }


    public function __invoke(): Books
    {
        $books = $this->book_rep->find_all();

        return $books;
    }
}
