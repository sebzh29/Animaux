<?php

namespace App\Controller;

use App\Repository\PossedeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PossedeController extends AbstractController
{
    /**
     * @Route("/possedeMoinsDe/{nb}", name="possedeMoinsDe")
     */
    public function possedeMoinsDe(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos inferieur ou egal
        $result = $pr->findPossedeHaveLessThan($nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

     /**
     * @Route("/possedePlusDe/{nb}", name="possedePlusDe")
     */
    public function possedePlusDe(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos superieur ou egal
        $result = $pr->findPossedeHaveOverThan($nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

    /**
     * @Route("/possedeMoinsD/{nb}", name="possedeMoinsDe")
     */
    public function possedeInfNb(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos inferieur strict
        $result = $pr->findPossedeInfNb('<',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

     /**
     * @Route("/possedePlusD/{nb}", name="possedePlusDe")
     */
    public function possedePlus(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos superieur strict
        $result = $pr->findPossedePlus('>',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

    
}
