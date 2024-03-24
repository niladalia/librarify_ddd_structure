<?php

declare(strict_types=1);

namespace App\Tests\Mother;

use App\Authors\Application\Create\CreateAuthorCommand;
use App\Authors\Domain\Author;
use App\Authors\Domain\AuthorId;
use App\Authors\Domain\AuthorName;

final class AuthorMother
{
    public static function create(?AuthorId $id = null, ?AuthorName $name = null): Author
    {
        return new Author(
            $id ?? new AuthorId(),
            $name ?? new AuthorName(),
        );
    }

	public static function fromRequest(CreateAuthorCommand $request): Author
	{
		return self::create(
            AuthorIdMother::create($request->id()),
			AuthorNameMother::create($request->name())
		);
	}
}
