<?php

namespace App\Books\Domain;

use App\Books\Domain\Book;
use App\Categories\Domain\Categories;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints\Collection;

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
}
