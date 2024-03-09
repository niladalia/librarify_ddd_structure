<?php

namespace App\Authors\Application\Create;

use App\Authors\Domain\Author;
use App\Authors\Domain\AuthorName;
use App\Authors\Application\Dto\AuthorDto;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;

class AuthorCreator
{
    public function __construct(private DoctrineAuthorRepository $author_rep) {}

    public function __invoke(AuthorName $name): Author
    {
        $author = Author::create($name);

        $this->author_rep->save($author);

        return $author;
    }
}
