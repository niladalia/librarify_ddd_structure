<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Update\BookFieldUpdater;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class BooksPatchController extends AbstractController
{

    public function __invoke(string $id, Request $request, BookFieldUpdater $bookFieldUpdater): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $book = ($bookFieldUpdater)($data, $id);

        return new JsonResponse(
            $book->toArray()
        );
    }

}
