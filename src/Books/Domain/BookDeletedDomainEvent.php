<?php

namespace App\Books\Domain;

use App\Shared\Domain\Event\DomainEvent;

class BookDeletedDomainEvent extends DomainEvent
{
    public function __construct (
        private string $bookId,
        string $eventId = null,
		string $occurredOn = null
        )
    {
        parent::__construct($bookId,$eventId,$occurredOn);

        $this->bookId = $bookId;
    }
    
	public static function deserialize(
		string $bookId,
        array $body = [],
		string $eventId,
		string $occurredOn
	): DomainEvent {
		return new self($bookId, $eventId, $occurredOn);
	}

	public function serialize(): array
	{
		return [
			'bookId' => $this->bookId,
			'eventId' => $this->eventId(),
			'occurred_on' => $this->occurredOn(),
		];
	}
    public static function eventName(): string
	{
		return 'librarify.book.1.event.book.deleted';
	}
}
