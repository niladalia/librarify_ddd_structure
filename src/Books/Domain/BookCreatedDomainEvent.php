<?php

namespace App\Books\Domain;

use App\Shared\Domain\Event\DomainEvent;

class BookCreatedDomainEvent extends DomainEvent 
{
    public function __construct(
        private readonly string $bookId,
		private readonly ?string $title,
        string $eventId = null,
		string $occurred_on = null
    ) {
        parent::__construct($bookId,$eventId,$occurred_on);
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function id(): ?string
    {
        return $this->bookId;
    }

	// TODO : Not correct
	public static function deserialize(
		string $aggregateId,
		array  $body,
		string $eventId,
		string $occurredOn
	): DomainEvent {
		return new self($aggregateId, $body['title'], $eventId, $occurredOn);
	}

	public function serialize(): array
	{
		return [
			'bookId' => $this->bookId,
            'title' => $this->title,
			'eventId' => $this->eventId(),
			'occurred_on' => $this->occurredOn(),
		];
	}
    
    public static function eventName(): string
	{   
		return 'librarify.book.1.event.book.created';
	}
}