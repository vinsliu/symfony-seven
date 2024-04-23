<?php

namespace App\Repository;

use App\Model\Coffee;
use Psr\Log\LoggerInterface;

class CoffeeRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function findAll(): array
    {
        $this->logger->info('Coffee variety retrieved');

        return [
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
    }
}
