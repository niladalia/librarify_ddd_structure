<?php

namespace App\Books\Application\Find;

use App\Books\Application\Find\DTO\RequestBooksFinder;
use App\Books\Domain\Books;
use App\Books\Domain\BookRepository;
use App\Books\Domain\Score;
use App\Books\Domain\Title;

class   BooksFinder
{
    public function __construct(private BookRepository $book_rep) {}


    public function __invoke(RequestBooksFinder $requestBooksFinder): Books
    {

        return $this->book_rep->findByParams
        (
            new Title($requestBooksFinder->title(),true),
            new Score($requestBooksFinder->score()),
            $requestBooksFinder->limit(),
            $requestBooksFinder->offset()
        );
    }
}
