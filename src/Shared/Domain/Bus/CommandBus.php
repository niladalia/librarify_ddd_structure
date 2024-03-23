<?php


namespace App\Shared\Domain\Bus;

use App\Shared\Domain\Bus\Command\CommandInterface;

interface CommandBus
{
    public function dispatch(CommandInterface $command): void;
}
