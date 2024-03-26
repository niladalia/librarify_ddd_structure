<?php

namespace App\Books\Application\Update;

use App\Books\Application\Create\DTO\CreateBookRequest;
use App\Books\Domain\Book;
use App\Categories\Application\Create\CategoryCreator;
use App\Categories\Application\Find\CategoryFinder;
use Doctrine\Common\Collections\ArrayCollection;

class UpdateBookCategory
{
    private $getCategory;
    private $categoryCreator;
    public function __construct(CategoryFinder $getCategory, CategoryCreator $categoryCreator)
    {
        $this->getCategory = $getCategory;
        $this->categoryCreator = $categoryCreator;
    }


    public function __invoke(ArrayCollection $original_categories_dto, CreateBookRequest $bookDto, Book $book)
    {
        // Si cal, borrem la categoria
        foreach ($original_categories_dto as $category_dto) {
            if (!in_array($category_dto, $bookDto->categories())) {
                $category = ($this->getCategory)($category_dto->id);
                if ($category !== null) {
                    $book->removeCategory($category);
                }
            }
        }
        // Creem la categoria si no existeix
        foreach ($bookDto->categories() as $new_category) {
            $category = null;
            if (!$original_categories_dto->contains($new_category)) {
                if ($new_category->id != null) {
                    $category = ($this->getCategory)($new_category->id);
                }
                if (!$category) {
                    $category = ($this->categoryCreator)($new_category);
                }
                $book->addCategory($category);
            }
        }
    }
}
