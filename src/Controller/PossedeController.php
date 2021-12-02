<?php

namespace App\Controller;

use App\Repository\PossedeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PossedeController extends AbstractController
{
    /**
     * @Route("/<=/{nb}", name="possedeMoinsDe")
     */
    public function possedeMoinsDe(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos inferieur ou egal
        $result = $pr->findPossedeHave('<=',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

     /**
     * @Route("/>=/{nb}", name="possedePlusDe")
     */
    public function possedePlusDe(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos superieur ou egal
        $result = $pr->findPossedeHave('>=',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

    /**
     * @Route("/</{nb}", name="possedeMoinsD")
     */
    public function possedeInfNb(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos inferieur strict
        $result = $pr->findPossedeHave('<',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

     /**
     * @Route("/>/{nb}", name="possedePlusD")
     */
    public function possedePlus(PossedeRepository $pr,$nb): Response
    {
        // personne possedant les zanimos superieur strict
        $result = $pr->findPossedeHave('>',$nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }

    
}
