<?php

namespace App\frontend\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeGetWebController extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return $this->render('pages/home.html.twig', [
            'title' => 'Welcome',
            'description' => 'CodelyTV - Backoffice',
        ]);
    }
}