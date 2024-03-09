<?php

namespace App\Books\Domain;

use App\Books\Domain\Book;
use Doctrine\Common\Collections\ArrayCollection;

final class Books extends ArrayCollection
{
    public function __construct(Book ...$books)
    {
        parent::__construct($books);
    }

    public function toArray(): array
    {
        $books = [];

        foreach ($this as $book) {
            $books[] = $book->toArray();
        }

        return $books;
    }

    public function toSmallArray(): array
    {
        $books = [];

        foreach ($this as $book) {
            $books[] = $book->toSmallArray();
        }


        return $books;
    }
}
