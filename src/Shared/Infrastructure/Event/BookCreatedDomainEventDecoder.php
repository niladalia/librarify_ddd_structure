<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Event;

use App\Books\Domain\BookCreatedDomainEvent;
use DateTimeImmutable;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Transport\Serialization\SerializerInterface;

final class BookCreatedDomainEventDecoder implements SerializerInterface
{

    public function decode(array $encodedEnvelope): Envelope
    {

        $attributes = json_decode($encodedEnvelope['body'], true)['attributes'];

        #$occurredOn = new DateTimeImmutable($attributes['occurred_on']);        

        $message = new BookCreatedDomainEvent($attributes['bookId'],$attributes['title'],$attributes['eventId'],$attributes['occurred_on']);

        return new Envelope($message);
    }

    public function encode(Envelope $envelope): array
    {
        return [];
/*
            $domainEvent = $envelope->getMessage();

            if (!$domainEvent instanceof DomainEvent) {
                throw new \Exception('Unsupported message class');
            }   
            return [
                'body' => json_encode($domainEvent->serialize()),
            ];
*/
    }
}