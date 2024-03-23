<?php

namespace App\Authors\Domain;

use App\Authors\Domain\AuthorName;
use App\Books\Domain\Book;
use App\Books\Domain\Books;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Author
{
    public $id;
    public $name;
    /**
     * @var  Collection<int, Book>
    */

    private Collection $books;

    public function __construct(AuthorId $uuid, ?AuthorName $name = new AuthorName())
    {
        $this->id = $uuid;
        $this->name = $name;
        $this->books = new ArrayCollection();
    }


    public static function create(
        AuthorId $id,
        AuthorName $name
    ): self {
        $author = new self(
            $id,
            $name
        );

        return $author;
    }

    public function getId(): ?AuthorId
    {
        return $this->id;
    }

    public function getName(): ?AuthorName
    {
        return $this->name;
    }

    public function setName(?AuthorName $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Book>
     */
    public function getBooks(): Collection
    {
        return $this->books;
    }

    public function addBook(Book $book): static
    {
        if (!$this->books->contains($book)) {
            $this->books->add($book);
            $book->setAuthor($this);
        }

        return $this;
    }

    public function toArray(): array
    {
        $books =  new Books(...$this->getBooks());
        return [
            "id" => $this->getId()->getValue(),
            "name" => $this->getName()->getValue(),
            "books" => $books->toSmallArray()
        ];
    }

    public function toSmallArray(): array
    {
        return [
            'id' => $this->getId()->getValue(),
            "name" => $this->getName()->getValue()
        ];
    }

    public function removeBook(Book $book): static
    {
        if ($this->books->removeElement($book)) {
            // set the owning side to null (unless already changed)
            if ($book->getAuthor() === $this) {
                $book->setAuthor(null);
            }
        }

        return $this;
    }
}
