<?php

namespace App\Authors\Domain;

use App\Shared\Domain\ValueObject\StringValueObject;
use App\Shared\Domain\Exceptions\InvalidArgument;

final class AuthorName extends StringValueObject
{
    protected function validate()
    {
        if ($this->value == null) {
            return null;
        }
        if (strlen($this->value) <= 2) {
            InvalidArgument::throw('El nombre tiene que tener un mínimo de 3 caracteres');
        }
    }
}
