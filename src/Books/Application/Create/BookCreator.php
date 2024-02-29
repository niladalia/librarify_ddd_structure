<?php

namespace App\Books\Application\Create;

use App\Books\Domain\Book;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use App\Books\Domain\Title;
use App\Books\Application\Dto\BookDto;
use App\Books\Infrastructure\Persistence\DoctrineBookRepository;
use App\FileUploader\Domain\FileUploaderInterface;
use App\Authors\Application\Find\AuthorFinder;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class BookCreator
{
    public function __construct(
        private FileUploaderInterface $fileUploader,
        private DoctrineBookRepository $book_rep,
        private AuthorFinder $authorFinder,
        private EventDispatcherInterface $eventDispatcher
    ) {
        $this->fileUploader = $fileUploader;
        $this->book_rep = $book_rep;
        $this->authorFinder = $authorFinder;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function __invoke(BookDto $bookDto): Book
    {
        $author = $bookDto->author_id ? ($this->authorFinder)($bookDto->author_id) : null;
        $filename = $bookDto->base64Image ? $this->fileUploader->uploadFile($bookDto) : null;

        $book = Book::create(
            new Title($bookDto->title),
            $filename,
            $author,
            new Description($bookDto->description),
            new Score($bookDto->score),
        );
        $this->book_rep->save($book);

        /*
         Aquí llançem tots els events de domini que haguem creat en el domini.
         $this->eventDispatcher->dispatch(...$book->pullDomainEvents());
        */

        foreach ($book->pullDomainEvents() as $event) {
            $this->eventDispatcher->dispatch($event);
        }
        return $book;
    }
}
