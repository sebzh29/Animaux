<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personnes", name="personne")
     */
    // public function index(PersonneRepository $r): Response
    // {
    //     $p = $r->findAll();
    //     return $this->render('personne/index.html.twig', [
    //         'personne' => $p
    //     ]);
    // }

    /**
     * @Route("/personne/{id}", name="afficher_personne")
     */
    public function afficherPersonne(Personne $personne)
    {
        return $this->render('personne/personne.html.twig',["personne" => $personne]);
    }
}
