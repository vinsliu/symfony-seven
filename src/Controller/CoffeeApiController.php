<?php

namespace App\Controller;

use App\Repository\CoffeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/coffee')]
class CoffeeApiController extends AbstractController
{
    #[Route('', methods: ['GET'])]
    public function getCollection(CoffeeRepository $repository): Response
    {
        $coffee = $repository->findAll();

        return $this->json($coffee);
    }

    #[Route('/{id<\d+>}', methods: ['GET'])]
    public function get(int $id, CoffeeRepository $repository): Response
    {
        $coffee = $repository->find($id);

        if (!$coffee) {
            throw $this->createNotFoundException('Coffee not found');
        }

        return $this->json($coffee);
    }
}
