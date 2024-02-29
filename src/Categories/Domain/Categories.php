<?php

namespace App\Categories\Domain;

use App\Categories\Domain\Category;
use Doctrine\Common\Collections\ArrayCollection;

final class Categories extends ArrayCollection
{
    public function __construct(Category ...$categories)
    {
        parent::__construct($categories);
    }

    public function toArray(): array
    {
        $categories = [];

        foreach ($this as $category) {
            $categories[] = $category->toArray();
        }

        return $categories;
    }
}
