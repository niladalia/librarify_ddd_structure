<?php

namespace App\Authors\Application\Create;

use App\Authors\Domain\AuthorName;

// ATENTION : Infrastructure component in Application layer !
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final readonly class CreateAuthorCommandHandler
{
	public function __construct(private AuthorCreator $creator) {}

	public function __invoke(CreateAuthorCommand $command): void
	{
		$name = new AuthorName($command->name());

		$this->creator->__invoke($name);   
	}
}
