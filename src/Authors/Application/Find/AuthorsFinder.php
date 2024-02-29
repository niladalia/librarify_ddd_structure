<?php

namespace App\Authors\Application\Find;

use App\Authors\Domain\Author;
use App\Authors\Domain\AuthorNotFound;
use App\Authors\Domain\Authors;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;
use Ramsey\Uuid\Uuid;

class AuthorsFinder
{
    private $author_rep;

    public function __construct(DoctrineAuthorRepository $author_rep)
    {
        $this->author_rep = $author_rep;
    }


    public function __invoke(): Authors
    {
        $books = $this->author_rep->find_all();

        return $books;
    }
}
