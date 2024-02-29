<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Find\BooksFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class BooksGetController extends AbstractController
{

    public function __invoke(BooksFinder $booksFinder): JsonResponse
    {
        $books = $booksFinder->__invoke();

        return new JsonResponse(
            $books->toArray()
        );
    }
}
