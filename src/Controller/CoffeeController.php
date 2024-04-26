<?php

namespace App\Controller;

use App\Repository\CoffeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoffeeController extends AbstractController
{
    #[Route('/coffee/{id<\d+>}', name: 'app_coffee_show')]
    public function show(int $id, CoffeeRepository $repository): Response
    {
        $coffee = $repository->find($id);
        if (!$coffee) {
            throw $this->createNotFoundException('Coffee not found');
        }

        return $this->render('coffee/show.html.twig', [
            'coffee' => $coffee
        ]);
    }
}
