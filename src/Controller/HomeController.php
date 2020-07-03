<?php

//Permet d'identifier la classe
//Pour pouvoir l'appeler dans d'autres classes.

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

// je créé une classe HomeController, qui correspond au nom du fichier,
// qui permet de regrouper des routes

class HomeController {
    /**
     * @Route("/test",name="home")
     *
     * je crée un route dans un commentaire que PHP va executer (c'est une annotation
     * Je sais que c'est une annotation car il y a une classe avec @ devant.
     * J'associe une url à ma route, et je leui associe aussi une méthode
     * La méthode du controleur sera exécutée avec l'url
     */
    public function home()
    {
        var_dump('Coucou ! ça va ?'); die;
    }

}

