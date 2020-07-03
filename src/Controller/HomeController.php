<?php

// le namespace permet d'identifier ma classe
// pour pouvoir l'appeler dans d'autres classes
namespace App\Controller;

// je viens utiliser la classe Route donc j'ai besoin d'importer
// son namespace
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe HomeController, qui correspond
// au nom du fichier, et qui me permet de regrouper des routes
// ma classe de controleur étend la classe de Symfony AbstractController
// ça permet à ma classe de bénéficer des méthodes de la classe
// AbstractController (c'est le système d'héritage en PHP)
class HomeController extends AbstractController {

    /**
     * @Route("/test2", name="home")
     */
    // Si je veux récupérer une instance de la classe de
    // Symfony "Request", je peux la créer avec "new Request()"
    // Mais aussi je peux utiliser le méchanisme "d'autowire'"
    // de Symfony qui me permet de spécifier en parametre d'une méthode
    // la classe à instancier + le nom d'une variable
    // et symfony automatiquement va instancier la classe dans la variable
    public function home(Request $request)
    {
        // j'utilise l'instance de la classe Request
        // pour récupérer le parametre d'url 'age'
        // cette classe Request de Symfony sert uniquement à ça :
        // récupérer des informations de la requête utilisateur (ip, url
        // méthode, parametres etc)
        $age = $request->query->get('age');

        var_dump($age); die;
    }

}


