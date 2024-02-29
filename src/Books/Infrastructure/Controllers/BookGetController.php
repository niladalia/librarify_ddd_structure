<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Find\BookFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BookGetController extends AbstractController
{

    public function __invoke(string $id, BookFinder $bookFinder): JsonResponse
    {
        $book = $bookFinder->__invoke($id);

        return new JsonResponse(
            $book->toArray()
        );
    }
}
