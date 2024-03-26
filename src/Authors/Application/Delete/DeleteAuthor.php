<?php

namespace App\Authors\Application\Delete;

use App\Authors\Domain\Author;
use App\Authors\Infrastructure\Persistence\DoctrineAuthorRepository;

class DeleteAuthor
{
    public function __construct(
        private DoctrineAuthorRepository $author_rep
    ) {
        $this->author_rep = $author_rep;
    }

    public function __invoke(Author $author): Author
    {
        $this->author_rep->delete($author);

        return $author;
    }
}
