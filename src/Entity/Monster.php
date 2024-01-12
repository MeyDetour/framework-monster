<?php

namespace App\Entity;

use Core\Attributes\Table;
use Core\Attributes\TargetRepository;
use App\Repository\MonstersRepository;
#[TargetRepository(name : MonstersRepository::class)]
#[Table(name : "monsters")]
class monster
{
private $id;
private $name;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
    private $price;


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }
    private $description;


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description): void
    {
        $this->description = $description;
    }
    private $image;


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image): void
    {
        $this->image = $image;
    }
    private $create_at;


    public function getCreateAt()
    {
        return $this->create_at;
    }


    public function setCreateAt($create_at): void
    {
        $this->create_at = $create_at;
    }
    private $update_at;


    public function getUpdateAt()
    {
        return $this->update_at;
    }

    public function setUpdateAt($update_at): void
    {
        $this->update_at = $update_at;
    }
    private $category;


    public function getCategory()
    {
        return $this->category;
    }


    public function setCategory($category): void
    {
        $this->category = $category;
    }
    private $category2;


    public function getCategory2()
    {
        return $this->category2;
    }


    public function setCategory2($category): void
    {
        $this->category2 = $category;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }
}