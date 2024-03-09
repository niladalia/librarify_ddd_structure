<?php

namespace App\Authors\Infrastructure\Controllers;

use App\Authors\Application\Create\AuthorCreator;
use App\Authors\Application\Create\CreateAuthorCommand;
use App\Authors\Application\Dto\AuthorDto;
use App\Authors\Application\Find\AuthorsFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

class AuthorsPostController extends AbstractController
{

    public function __invoke(Request $request,MessageBusInterface $commandBus): Response
    {
        $data = json_decode($request->getContent(), true);
        $commandBus->dispatch(
            new CreateAuthorCommand(
                (string) $data['name']
            )
        );

		return new Response('', Response::HTTP_CREATED);
    }
}
