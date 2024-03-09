<?php

namespace App\Authors\Application\Create;

final readonly class CreateAuthorCommand
{
    public function __construct(private ?string $name) {}


    public function name(): ?string
    {
            return $this->name;
    }
}
