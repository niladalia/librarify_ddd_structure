<?php

namespace App\Isbn\Intrastructure\Controllers;

use App\Isbn\Application\GetBookInfoByIsbn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IsbnGetController extends AbstractController
{
    public function __invoke(Request $request, GetBookInfoByIsbn $getIsbn): Response
    {
        $isbn = $request->get('isbn', null);
        $data = $getIsbn($isbn);
        return $this->json($data);
    }
}
