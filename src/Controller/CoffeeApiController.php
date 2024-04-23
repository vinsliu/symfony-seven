<?php

namespace App\Controller;

use App\Repository\CoffeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoffeeApiController extends AbstractController
{
    #[Route('/api/coffee')]
    public function getCollection(CoffeeRepository $repository): Response
    {
        $coffee = $repository->findAll();

        return $this->json($coffee);
    }
}
