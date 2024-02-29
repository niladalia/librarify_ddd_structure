<?php

namespace App\Books\Domain;

use App\Books\Domain\Book;
use App\Shared\Domain\ValueObject\StringValueObject;
use App\Shared\Domain\Exceptions\InvalidArgument;

final class Description extends StringValueObject
{
    protected function validate()
    {
        if ($this->value == null) {
            return null;
        }
        if (strlen($this->value) <= 2) {
            InvalidArgument::throw('La descripción tiene que tener un mínimo de 3 caracteres');
        }
    }

    public function update(Book $book): void
    {
        $book->setDescription($this);
    }
}
