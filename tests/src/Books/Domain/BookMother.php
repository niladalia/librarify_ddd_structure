<?php

declare(strict_types=1);

namespace App\Tests\src\Books\Domain;

use App\Authors\Domain\Author;
use App\Books\Domain\Book;
use App\Books\Domain\BookId;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use App\Books\Domain\Title;
use Ramsey\Uuid\Uuid;

final class BookMother
{
    public static function create(?BookId $id = null, ?Title $title = null, ?string $filename = null, ?Author $author = null, ?Description $description = null, ?Score $score = null ): Book
    {
        return new Book(
            $id ?? new BookId(Uuid::uuid4()->serialize()),
            $title ?? new Title("NEW TITLE"),
            $filename,
            $author,
            $description ?? new Description(),
            $score ?? new Score()
        );
    }
}
