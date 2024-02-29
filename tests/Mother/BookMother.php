<?php

declare(strict_types=1);

namespace App\Tests\Mother;

use App\Authors\Domain\Author;
use App\Books\Domain\Book;
use App\Books\Domain\Title;
use App\Books\Application\Dto\BookDto;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class BookMother
{
    public static function create(?UuidInterface $id = null, ?Title $title = null, ?string $filename = null, ?Author $author = null, ?Description $description = null, ?Score $score = null ): Book
    {
        return new Book(
            $id ?? Uuid::uuid4(),
            $title ?? new Title(),
            $filename,
            $author,
            $description ?? new Description(),
            $score ?? new Score()
        );
    }
}
