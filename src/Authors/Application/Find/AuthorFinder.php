<?php

namespace App\Authors\Application\Find;

use App\Authors\Domain\Author;
use App\Authors\Domain\AuthorNotFound;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;
use Ramsey\Uuid\Uuid;

class AuthorFinder
{
    private $author_rep;

    public function __construct(DoctrineAuthorRepository $author_rep)
    {
        $this->author_rep = $author_rep;
    }


    public function __invoke(string $id): ?Author
    {
        $author = $this->author_rep->find(Uuid::fromString($id));
        if (!$author) {
            AuthorNotFound::throw($id);
        }
        return $author;
    }
}
