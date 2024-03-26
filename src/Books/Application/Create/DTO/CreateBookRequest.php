<?php

namespace App\Books\Application\Create\DTO;

use App\Books\Domain\Book;

class CreateBookRequest
{
    public function __construct(
        private ?string $title = null,
        private ?string $base64Image = null,
        private ?array $categories = [],
        private ?string $author_id = null,
        private ?int $score = null,
        private ?string $description = null
    ) {
        $this->categories = [];
    }

    public function title(): ?string
    {
        return $this->title;
    }

    public function base64Image(): ?string
    {
        return $this->base64Image;
    }

    public function categories(): ?array
    {
        return $this->categories;
    }

    public function author_id(): ?string
    {
        return $this->author_id;
    }

    public function score(): ?int
    {
        return $this->score;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public static function createFromBook(Book $book)
    {
        $dto = new self();
        $dto->title = $book->title()->getValue();
        return $dto;
    }
}
