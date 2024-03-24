<?php

namespace App\Tests\src\Authors\Application;

use App\Authors\Application\Create\CreateAuthorCommand;

final class CreateAuthorCommandMother
{
	public static function create(?string $id= null,?string $name = null): CreateAuthorCommand
	{
		return new CreateAuthorCommand($id,$name);
	}
}
