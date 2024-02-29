<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Delete\DeleteBook;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BooksDeleteController extends AbstractController
{

    public function __invoke(string $id, DeleteBook $deleteBook): Response
    {
        ($deleteBook)($id);

        return new Response('', Response::HTTP_OK);
    }

}
