<?php

namespace App\Controller;

use App\Model\Coffee;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoffeeApiController extends AbstractController
{
    #[Route('/api/coffee')]
    public function getCollection(LoggerInterface $logger): Response
    {
$logger->info('Coffee variety retrieved');
        $coffees = [
            new Coffee(
                1,
                "Arabica",
                "Various",
                "Fruity, acidic",
            ),
            new Coffee(
                2,
                "Robusta",
                "Africa",
                "Strong, bitter",
            ),
            new Coffee(
                3,
                "Liberica",
                "Southeast Asia",
                "Smokey, woody",
            )

        ];

        return $this->json($coffees);
    }
}
