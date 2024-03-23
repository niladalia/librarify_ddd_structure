<?php

namespace App\Tests\Mother;

use App\Authors\Domain\AuthorId;


final class AuthorIdMother
{
	public static function create(?string $value = null): AuthorId
	{
		return new AuthorId($value);
	}
}
