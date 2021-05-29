<?php

namespace App\Controller;

use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(ServiceRepository $repository)
    {
        $services = $repository->findLatest();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'services' => $services,
        ]);
    }
}
