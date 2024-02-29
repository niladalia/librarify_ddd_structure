<?php

namespace App\Authors\Domain;

use Doctrine\Common\Collections\ArrayCollection;

final class Authors extends ArrayCollection
{
    public function __construct(Author ...$authors)
    {
        parent::__construct($authors);
    }

    public function toArray(): array
    {
        $authors = [];

        foreach ($this as $author) {
            $authors[] = $author->toArray();
        }

        return $authors;
    }
}
