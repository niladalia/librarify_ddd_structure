<?php

namespace App\Books\Domain;
// Aixó es de infraestructura ! I estem en Domini !!! Crear value object BookId !
use Ramsey\Uuid\UuidInterface;

interface BookRepository

{
    public function search(BookId $id): ?Book;

    public function find_all(): ?Books;

    public function save(Book $book): Book;

    public function reload(Book $book): Book;

    public function delete(Book $book): void;
}
