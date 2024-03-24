<?php

namespace App\Tests\Mother;

use App\Authors\Domain\AuthorName;


final class AuthorNameMother
{
	public static function create(?string $value = null): AuthorName
	{
		return new AuthorName($value);
	}
}
