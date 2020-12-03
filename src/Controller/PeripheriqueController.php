<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeripheriqueController extends AbstractController
{
    /**
     * @Route("/ecran", name="ecran")
     */
    public function ecranRoute(): Response
    {
        return $this->render('peripherique/ecran.html.twig', [
            'controller_name' => 'PeripheriqueController',
        ]);
    }

    /**
     * @Route("/clavier", name="clavier")
     */
    public function clavierRoute(): Response
    {
        return $this->render('peripherique/clavier.html.twig', [
            'controller_name' => 'PeripheriqueController',
        ]);
    }

    /**
     * @Route("/souris", name="souris")
     */
    public function sourisRoute(): Response
    {
        return $this->render('peripherique/souris.html.twig', [
            'controller_name' => 'PeripheriqueController',
        ]);
    }

    /**
     * @Route("/micro", name="micro")
     */
    public function microRoute(): Response
    {
        return $this->render('peripherique/micro.html.twig', [
            'controller_name' => 'PeripheriqueController',
        ]);
    }

    /**
     * @Route("/casque", name="casque")
     */
    public function casqueRoute(): Response
    {
        return $this->render('peripherique/casque.html.twig', [
            'controller_name' => 'PeripheriqueController',
        ]);
    }
}
