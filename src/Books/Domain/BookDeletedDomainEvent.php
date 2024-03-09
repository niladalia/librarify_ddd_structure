<?php

namespace App\Books\Domain;

use Ramsey\Uuid\UuidInterface;
use Symfony\Contracts\EventDispatcher\Event;

class BookDeletedDomainEvent extends Event
{
    public const NAME = 'book.deleted';

    public function __construct(public UuidInterface $bookId, public ?string $filename, public ?string $author_id )
    {
        $this->bookId = $bookId;
        $this->filename = $filename;
        $this->author_id = $author_id;
    }
}
