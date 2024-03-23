<?php

namespace App\Shared\Domain\ValueObject;

use App\Shared\Domain\Exceptions\InvalidArgument;
use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

// La fem abstract perque no volem que sigui instanciable i perque conté u metode abstracte a mes a mes de metodes implementats
abstract class UuidValueObject 
{
    public function __construct(protected ?string $value = null)
    {
        $this->value = $value;

        $this->validate($value);
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    private function validate(string $id) 
    {
		if (!Uuid::isValid($id)) {
			InvalidArgument::throw('El ID es invalido !.');
		}
    }
}
