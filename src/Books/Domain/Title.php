<?php

namespace App\Books\Domain;

use App\Shared\Domain\ValueObject\StringValueObject;
use App\Shared\Domain\Exceptions\InvalidArgument;

final class Title extends StringValueObject
{
    protected function validate()
    {
        if ($this->value == null) {
            InvalidArgument::throw('El titulo no puede estar vacío');
        }
        if (strlen($this->value) <= 2) {
            InvalidArgument::throw('El titulo tiene que tener un mínimo de 3 caracteres');
        }
    }
}
