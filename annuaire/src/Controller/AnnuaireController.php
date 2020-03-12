<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnuaireController extends AbstractController
{
    /**
     * @Route("/annuaire", name="annuaire")
     */
    public function index()
    {
        return $this->render('annuaire/index.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }
    /**
     * @Route("/inscriptionPro", name="inscriptionpro")
     */
    public function inscriptionPro()
    {
        return $this->render('annuaire/inscription_pro.html.twig', [
            'controller_name' => 'AnnuaireController',
        ]);
    }
}
