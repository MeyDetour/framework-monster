<?php

namespace App\Repository;

use App\Entity\Category;
use Core\Attributes\TargetEntity;
use Core\Repository\Repository;

#[TargetEntity(name: Category::class)]
class CategoryRepository extends Repository
{
    public function allCategories()
    {
        $query = $this->pdo->query("SELECT category FROM $this->tableName UNION SELECT category2 FROM $this->tableName");
        $items = $query->fetchAll(\PDO::FETCH_CLASS,get_class(new $this->targetEntity()));
        return $items;
    }

}