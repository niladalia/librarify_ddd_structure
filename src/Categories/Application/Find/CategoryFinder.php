<?php

namespace App\Categories\Application\Find;

use App\Categories\Domain\Category;
use App\Categories\Domain\CategoryNotFound;
use App\Categories\Infrastructure\Persistence\DoctrineCategoryRepository;
use Ramsey\Uuid\Uuid;

class CategoryFinder
{
    private $category_rep;

    public function __construct(DoctrineCategoryRepository $category_rep)
    {
        $this->category_rep = $category_rep;
    }

    public function __invoke(string $id): ?Category
    {
        $category =  $this->category_rep->find(Uuid::fromString($id));
        if (!$category) {
            CategoryNotFound::throw($id);
        }
        return $category;
    }
}
