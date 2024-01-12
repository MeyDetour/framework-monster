<?php

namespace App\Repository;

use App\Entity\Monster;
use Core\Attributes\TargetEntity;

use Core\Repository\Repository;

#[TargetEntity(name: Monster::class)]
class MonstersRepository extends Repository
{
    public function create(Monster $object)
    {

        $query = $this->pdo->prepare("INSERT INTO $this->tableName (`id`, `name`, `price`, `description`, `image`, `create_at`, `update_at`, `category`) VALUES (NULL, :name, :price , :description  ,NULL , NOW(), NOW(), :category)");
        $query->execute([
            "name" => $object->getName(),
            "price" => $object->getPrice(),
            "description" => $object->getDescription(),
            "category" => $object->getCategory(),
        ]);
    }

    public function filter($category)
    {
        $query = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE category=:category OR category2=:category");
        $query->execute([
            'category' => $category

        ]);

        $items = $query->fetchAll(\PDO::FETCH_CLASS, get_class(new $this->targetEntity()));
        return $items;

    }

    public function search($searchinput)
    {
        $searchinput = '%' . $searchinput . '%';
        $query = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE name LIKE :search 
        OR description LIKE :search 
        OR category LIKE :search 
        OR category2 LIKE :search 
        ");
        $query->execute([
            'search' => $searchinput

        ]);
        $items = $query->fetchAll(\PDO::FETCH_CLASS,get_class(new $this->targetEntity()));
       return $items;

    }
}