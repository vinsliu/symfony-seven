<?php

namespace App\Controller;

use App\Repository\CoffeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homePage(CoffeeRepository $coffeeRepository): Response
    {
        $coffee = $coffeeRepository->findAll();
        $coffeCount = count($coffee);

        $myCoffee = $coffee[array_rand($coffee)];

        return $this->render('main/homepage.html.twig', [
            'myCoffee' => $myCoffee,
            'coffee' => $coffee
        ]);
    }
}
