<?php

namespace Core\View;

use App\Controller\CategoryController;

class View
{
   public static function render($nomDeTemplate, $donnees){

        ob_start();
        extract($donnees);

        require_once "../templates/${nomDeTemplate}.html.php";

        $content = ob_get_clean();


        if(!isset($pageTitle)){ $pageTitle = "Pas de titre"; }
        $repo = new CategoryController();
        $categories =  $repo->allCategories();

        ob_start();
        require_once "../templates/base.html.php";
        echo ob_get_clean();

    }
}