<?php

namespace App\Entity;
use App\Repository\CategoryRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name : CategoryRepository::class)]
#[Table(name : "monsters")]
class Category
{
private $category;


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category): void
    {
        $this->category = $category;
    }
}