<?php

namespace App\Books\Infrastructure\Controllers;

use App\Books\Application\Create\BookCreator;
use App\Books\Application\Dto\BookDto;
use App\Books\Application\Dto\BookFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BooksPostController extends AbstractController
{

    public function __invoke(Request $request, BookCreator $bookCreator,FormFactoryInterface $formFactory): JsonResponse
    {
        /*
           DTO :
           Utilitzem un objecte DTO ja que tenim que treballar amb el camp base64Image.
           Per estalviar-nos tenir que crearlo a la BD o al Entity, creem el objecte DTO
           on podrem crear tots els camps que volguem per moldejar l'objecte.

           FORM:
           Crear formularis per als objectes ens permet poder asignar els valors directament des de la request fins al objecte
           (en aquest cas DTO cosa que ens obliga a asignarlos altra vegada) sense que tinguem que asignarlos manualment un a un.
           A mes a mes també ens proporciona un validador de dades configurable a un .yaml
        */

        $bookDto = new BookDto();
        $form = $formFactory->create(BookFormType::class, $bookDto);
        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            throw new HttpException(400, 'Object is not valid');
        }

        $book = ($bookCreator)($bookDto);

        return new JsonResponse(
            $book->toArray()
        );
    }

}
