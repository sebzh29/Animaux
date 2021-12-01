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
        $result = $pr->findPossedeHaveLessThan($nb);
        return $this->render('possede/index.html.twig', [
            'possed' => $result,
        ]);
    }
}
