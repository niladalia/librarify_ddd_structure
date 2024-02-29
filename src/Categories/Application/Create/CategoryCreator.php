<?php

namespace App\Categories\Application\Create;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Categories\Domain\Category;
use App\Categories\Domain\CategoryName;
use App\Categories\Application\Dto\CategoryDto;
use App\Categories\Infrastructure\Persistence\DoctrineCategoryRepository;
use Ramsey\Uuid\Uuid;

class CategoryCreator
{
    private $category_rep;
    public function __construct(DoctrineCategoryRepository $category_rep)
    {
        $this->category_rep = $category_rep;
    }

    public function __invoke(CategoryDto $categoryDto): Category
    {
        $category = new Category
        (
            Uuid::uuid4(),
            new CategoryName($categoryDto->name)
        );

        $this->category_rep->save($category);

        return $category;
    }
}
