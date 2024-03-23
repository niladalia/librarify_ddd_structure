<?php

namespace App\Shared\Domain\Event;

use DateTimeImmutable;
use DateTimeInterface;
use Ramsey\Uuid\Uuid;

abstract class  DomainEvent
{
    private readonly string $eventId;
	private readonly string $occurredOn;

    public function __construct(private readonly string $aggregateId, string $eventId = null, string $occurredOn = null)
	{
        $date = new DateTimeImmutable();
		$this->eventId = $eventId ?: Uuid::uuid4()->serialize();
		$this->occurredOn = $occurredOn ?: $date->format(DateTimeInterface::ATOM);
	}

    abstract public static function eventName(): string;
	
	abstract public static function deserialize(
		string $aggregateId,
		array $body,
		string $eventId,
		string $occurredOn
	): self;


    abstract public function serialize(): array;

    final public function eventId(): string
	{
		return $this->eventId;
	}

	final public function occurredOn(): string
	{
		return $this->occurredOn;
	}
    
}