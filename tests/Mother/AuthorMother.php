<?php

declare(strict_types=1);

namespace App\Tests\Mother;

use App\Authors\Domain\Author;
use App\Authors\Domain\AuthorName;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

final class AuthorMother
{
    public static function create(?UuidInterface $id = null, ?AuthorName $name = null): Author
    {
        return new Author(
            $id ?? Uuid::uuid4(),
            $name ?? new AuthorName(),
        );
    }
}
