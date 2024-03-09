<?php

namespace App\Books\Application\Update;

use App\Books\Application\Find\BookFinder;
use App\Books\Domain\Book;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use App\Books\Domain\Title;
use App\Books\Domain\BookRepository;

class BookFieldUpdater
{
    private $book_rep;
    private $bookFinder;
    private $updateBookAuthor;

    public function __construct(
        BookRepository $book_rep,
        BookFinder $bookFinder,
        UpdateBookAuthor $updateBookAuthor
    ) {
        $this->book_rep = $book_rep;
        $this->bookFinder = $bookFinder;
        $this->updateBookAuthor = $updateBookAuthor;
    }

    public function __invoke(array $data, string $id): Book
    {
        $book = ($this->bookFinder)($id);

        if (\array_key_exists('score', $data)) {
            $book->setScore(new Score($data['score']));
        }
        if (\array_key_exists('title', $data)) {
            $book->setTitle(new Title($data['title']));
        }
        if (\array_key_exists('description', $data)) {
            $book->setDescription(new Description($data['description']));
        }
        if (\array_key_exists('author_id', $data)) {
            $new_author = ($this->updateBookAuthor)($data['author_id'], $book);
            $new_author ? $book->setAuthor($new_author) : null;
        }
        $book = $this->book_rep->save($book);
        return $book;
    }

    /*
    $field = array_keys($data)[0];
    $d='App\Books\Domain\Book\'.upfirst($field);
    $dd = new $d;
    */
}
