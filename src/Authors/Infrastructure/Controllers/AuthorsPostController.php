<?php

namespace App\Authors\Infrastructure\Controllers;

use App\Authors\Application\Create\CreateAuthorCommand;
use App\Shared\Domain\Bus\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorsPostController extends AbstractController
{

    public function __invoke(Request $request, string $id, CommandBus $commandBus): Response
    {
        $data = json_decode($request->getContent(), true);

            $commandBus->dispatch(
                new CreateAuthorCommand(
                    (string) $id,
                    (string) $data['name']
                )
            );
        

		return new Response('', Response::HTTP_CREATED);
    }
}
