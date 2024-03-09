<?php

namespace App\Books\Application\Find;

use App\Books\Domain\Book;
use App\Books\Domain\BookFinder as DomainBookFinder;
use App\Books\Domain\BookRepository;

class BookFinder
{
    //private readonly DomainBookFinder $domainBookFinder;

    public function __construct(private DomainBookFinder $domainBookFinder)
    {
        // Segons codelyTV, aixó es el que seria millor, pero em sembla ja massa. Tot i que ens podria anar be per el testing !
//     $this->domainBookFinder = new DomainBookFinder($book_rep);
       $this->domainBookFinder = $domainBookFinder;
    }


    public function __invoke(string $id): Book
    {
        return $this->domainBookFinder->__invoke($id);
    }
}
