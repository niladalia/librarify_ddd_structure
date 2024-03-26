<?php

namespace App\Books\Application\Create;

use App\Authors\Application\Find\AuthorFinder;
use App\Books\Application\Create\DTO\CreateBookRequest;
use App\Books\Application\UploadFile\BookFileUploader;
use App\Books\Domain\Book;
use App\Books\Domain\BookRepository;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use App\Books\Domain\Title;
use App\Shared\Domain\Event\EventBus;

readonly class BookCreator
{
    public function __construct(
        private BookFileUploader $fileUploader,
        private BookRepository $book_rep,
        private AuthorFinder $authorFinder,
        private EventBus $bus
    ) { }

    public function __invoke(CreateBookRequest $bookDto): Book
    {

        $author = $bookDto->author_id() ? ($this->authorFinder)($bookDto->author_id()) : null;
        // Aixó ho podem fer mitjançant un event de domini. I així sera asincrono?
        $filename = $bookDto->base64Image() ? $this->fileUploader->__invoke($bookDto) : null;
        $book = Book::create(
            new Title($bookDto->title()),
            $filename,
            $author,
            new Description($bookDto->description()),
            new Score($bookDto->score()),
        );
        $this->book_rep->save($book);
        /*
         Aquí llançem tots els events de domini que haguem creat en el domini.
         $this->bus->dispatch(...$book->pullDomainEvents());
        */

        foreach ($book->pullDomainEvents() as $event) {
            $this->bus->publish($event);
        }
        return $book;
    }
}
