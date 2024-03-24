<?php

namespace App\Shared\Infrastructure\Bus;

use App\Shared\Domain\Bus\Command\CommandInterface;
use App\Shared\Domain\Bus\CommandBus;
use Symfony\Component\Messenger\Exception\HandlerFailedException;
use Symfony\Component\Messenger\MessageBusInterface as  MessageBus;

class SymfonyCommandBus implements CommandBus
{
    
    public function __construct(private MessageBus $bus) {}

    public function dispatch(CommandInterface $command): void
    {
        try{
            $this->bus->dispatch($command);
        } catch (HandlerFailedException $error) {
            throw $error->getPrevious();
        }
    }
}