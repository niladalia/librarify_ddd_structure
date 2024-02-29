<?php

namespace App\Categories\Application\Dto;

use App\Categories\Domain\Category;

class CategoryDto
{
    public $id;
    public $name;

    public static function createFromCategory(Category $category)
    {
        $dto = new self();
        $dto->id = $category->getId();
        $dto->name = $category->getName();
        return $dto;
    }
}
