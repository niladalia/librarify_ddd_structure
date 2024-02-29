<?php

namespace App\Authors\Infrastructure\Controllers;

use App\Authors\Application\Create\AuthorCreator;
use App\Authors\Application\Dto\AuthorDto;
use App\Authors\Application\Find\AuthorsFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Response;

class AuthorsPostController extends AbstractController
{
    public function __invoke(HttpFoundationRequest $request, AuthorCreator $author_creator): JsonResponse
    {
        $params = json_decode($request->getContent(), true);

        $author = $author_creator(
            new AuthorDto($params['name'])
        );

        return new JsonResponse(
            $author->toArray()
        );
    }
}
