<?php

// le namespace permet d'identifier ma classe
// pour pouvoir l'appeler dans d'autres classes
namespace App\Controller;

// je viens utiliser la classe Route donc j'ai besoin d'importer
// son namespace
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe HomeController, qui correspond
// au nom du fichier, et qui me permet de regrouper des routes
class HomeController {

    /**
     * @Route("/test2", name="home")
     *
     * je créé une route dans un commentaire que PHP va
     * exécuter (c'est donc une annotation). Je sais que c'est une
     * annotation car il y une classe avec un @ devant.
     * J'associe une url à ma route, et je lui associe aussi
     * une méthode de controleur (en plaçant mon annotation au dessus
     * de la méthode). La méthode du controleur sera donc executée
     * quand l'url sera demandée dans un navigateur
     */
    public function home()
    {
        var_dump('hello home'); die;
    }
}
