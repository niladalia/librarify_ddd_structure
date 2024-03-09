<?php

namespace App\Authors\Infrastructure\Controllers;

use App\Authors\Application\Delete\DeleteAuthor;
use App\Authors\Application\Find\AuthorFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AuthorsDeleteController extends AbstractController
{
    public function __invoke(AuthorFinder $authorsFinder, DeleteAuthor $deleteAuthor, string $id): Response
    {
        $author = $authorsFinder->__invoke($id);
        $deleteAuthor->__invoke($author);
        return new Response('', Response::HTTP_OK);
    }
}
