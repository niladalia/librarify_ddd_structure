<?php

namespace App\Books\Domain;

use App\Authors\Domain\Author;
use App\Books\Domain\Description;
use App\Books\Domain\Score;
use App\Books\Domain\Title;
use App\Categories\Domain\Category;
use App\Categories\Domain\Categories;
use App\Books\Domain\BookCreatedDomainEvent;
use App\Shared\Domain\Event\DomainEvent;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Ramsey\Uuid\Uuid;
use Symfony\Contracts\EventDispatcher\Event;

class Book
{

    private Collection $categories;

    private array $domainEvents;


    public function __construct(
        private BookId $id,
        private Title $title,
        private ?string $image,

        // En comptes de Author crec que tindria que ser AuthorID igual que a codely, així no ens caldria fer la comprobació en el servei de Aplicacio.
        private ?Author $author,
        private ?Description $description =  new Description(),
        private ?Score $score = new Score()
    ) {
        $this->categories = new ArrayCollection();
    }

    public static function create(
        Title $title,
        ?string $filename,
        ?Author $author,
        ?Description $description,
        ?Score $score
    ): self {
        $book = new self(
            new BookId(Uuid::uuid4()),
            $title,
            $filename,
            $author,
            $description,
            $score
        );
        // Aquí creem el Event de domini indicant el tipus (Book created Domain event)
        $book->addDomainEvent(
            new BookCreatedDomainEvent(
                $book->getId()->getValue(),
                $book->getTitle()->getValue()
            )
        );
        return $book;
    }

    public function update(
        ?Title $title,
        ?string $filename,
        ?Author $author,
        ?Description $description,
        ?Score $score
    ) {
        $this->title = $title;
        $filename ? $this->image = $filename : null;
        $this->description = $description;
        $this->score = $score;
        $this->author = $author;
    }

    public function addDomainEvent(DomainEvent $event): void
    {
        $this->domainEvents[] = $event;
    }

    public function pullDomainEvents(): array
    {
        return $this->domainEvents;
    }
    public function getId(): BookId
    {
        return $this->id;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function setTitle(Title $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function toArray(): array
    {
        $categories =  new Categories(...$this->getCategories());

        return [
            'id' => $this->getId()->getValue(),
            'title' => $this->getTitle()->getValue(),
            'image' => $this->getImage(),
            'score' => $this->getScore()->getValue(),
            'description' => $this->getDescription()->getValue(),
            'categories' => $categories->toArray(),
            'author' => $this->getAuthor() ? $this->getAuthor()->toSmallArray() : null
        ];
    }
    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        $this->categories->removeElement($category);

        return $this;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function setScore(?Score $score)
    {
        $this->score = $score;

        return $this;
    }

    public function getScore(): Score
    {
        return $this->score;
    }

    public function getDescription(): Description
    {
        return $this->description;
    }


    public function setDescription(?Description $description)
    {
        $this->description = $description;

        return $this;
    }
}
