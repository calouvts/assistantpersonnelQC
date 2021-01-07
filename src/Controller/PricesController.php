<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricesController extends AbstractController
{
    /**
     * @Route("/prices", name="prices")
     */
    public function index(): Response
    {
        return $this->render('prices/index.html.twig', [
            'controller_name' => 'PricesController',
        ]);
    }
}
