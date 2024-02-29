<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Edit\BookEditor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class BooksPutController extends AbstractController
{

    public function __invoke(Request $request, string $id, BookEditor $bookEditor): JsonResponse
    {
        $request_data = json_decode($request->getContent(), true);
        $book = ($bookEditor)($request_data, $id);

        return new JsonResponse(
            $book->toArray()
        );
    }

}
