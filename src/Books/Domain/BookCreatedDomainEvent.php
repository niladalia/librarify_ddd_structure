<?php

namespace App\Books\Domain;

use App\Shared\Domain\Event\DomainEvent;

class BookCreatedDomainEvent extends DomainEvent 
{
    public function __construct(
        private string $bookId,
		private ?string $title,
        string $eventId = null,
		string $occurred_on = null
    ) {
        parent::__construct($bookId,$eventId,$occurred_on);
        
        $this->bookId = $bookId;
        $this->title = $title;
    }

    public function getId(): string
    {
        return $this->bookId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

	// TODO : Not correct
	public static function deserialize(
		string $bookId,
		array $body,
		string $eventId,
		string $occurred_on
	): DomainEvent {
		return new self($bookId, $body['filename'], $body['author_id'], $eventId, $occurred_on);
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