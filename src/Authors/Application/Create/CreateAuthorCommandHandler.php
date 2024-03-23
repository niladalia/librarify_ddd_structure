<?php

namespace App\Authors\Application\Create;

use App\Authors\Domain\AuthorId;
use App\Authors\Domain\AuthorName;
use Ramsey\Uuid\Uuid;
// ATENTION : Infrastructure component in Application layer !
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class CreateAuthorCommandHandler
{
	public function __construct(private AuthorCreator $creator) {}

	public function __invoke(CreateAuthorCommand $command): void
	{
		$name = new AuthorName($command->name());

		$id = new AuthorId($command->id());

		$this->creator->__invoke($id, $name);   
	}
}
