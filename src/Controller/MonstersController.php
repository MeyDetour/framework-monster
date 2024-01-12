<?php

namespace App\Controller;

use App\Entity\Monster;
use App\Repository\CategoryRepository;
use App\Repository\MonstersRepository;
use Core\Controller\Controller;

class MonstersController extends Controller
{
    public function index()
    {
        $repo = new MonstersRepository();
        $this->render('monsters/index',
            ["monsters" => $repo->findAll(),
                "pageTitle" => "Les Monster"]);

    }

    public function show()
    {
        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
            $repo = new MonstersRepository();
            $this->render('monsters/show',
                ["monster" => $repo->find($_GET['id']),
                    "pageTitle" => 'La monster']);
        } else {
            $this->redirect();
        }
    }

    public function delete()
    {

        if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
            $repo = new MonstersRepository();
            $repo->delete($_GET['id']);
        }
        $this->redirect();
    }


    public function create()
    {
        $repo = new MonstersRepository();
        if (
            isset($_POST['name'],
                $_POST['price'],
                $_POST['description'],
                $_POST['category']
            )) {
            $obj = new monster();
            $obj->setName($_POST['name']);
            $obj->setPrice($_POST['price']);
            $obj->setDescription($_POST['description']);
            $obj->setCategory($_POST['category']);

            $repo = new MonstersRepository();
            $repo->create($obj);
            $this->redirect();


        } else {
            $repo = new CategoryController();
            $categories = $repo->allCategories();
            $this->render('monsters/create', [
                "categories" => $categories,
                "pageTitle" => 'Creez'
            ]);

        }


    }

    public function filter()
    {
        if (isset($_GET['category'])) {
            $repo = new MonstersRepository();
            $this->render('monsters/index', [
                'monsters' => $repo->filter($_GET['category']),
                'pageTitle' => $_GET['category']
            ]);

        } else {
            $this->redirect();
        }
    }

    public function search()
    {

        if (isset($_POST['monstersSearch']) && !empty($_POST['monstersSearch'])) {

            $repo = new MonstersRepository();
            $this->render('monsters/index',
                ['monsters' => $repo->search($_POST['monstersSearch']),
                    'pageTitle'=>'Research']);
        } else {
            $this->redirect();
        }
    }

}

#filtre
#func filter controller-repo
#affichage
