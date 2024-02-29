<?php

namespace App\Authors\Application\Dto;

class AuthorDto
{
    public function __construct(public ?string $name = null)
    {
        $this->name = $name;
    }
}
