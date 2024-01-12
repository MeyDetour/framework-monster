<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Core\Controller\Controller;

class CategoryController extends Controller
{
    public function allCategories(){
        $repo = new CategoryRepository();
        $categories = $repo->allCategories();
        return $categories;

    }
}