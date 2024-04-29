<?php

namespace App\Repository;

use App\Model\Coffee;
use App\Model\CoffeeStatusEnum;
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
                CoffeeStatusEnum::COMPLETED,
            ),
            new Coffee(
                2,
                "Robusta",
                "Africa",
                "Strong, bitter",
                CoffeeStatusEnum::IN_PROGRESS,
            ),
            new Coffee(
                3,
                "Liberica",
                "Southeast Asia",
                "Smokey, woody",
                CoffeeStatusEnum::WAITING,
            )

        ];
    }

    public function find(int $id): ?Coffee
    {
        foreach ($this->findAll() as $coffee) {
            if ($coffee->getId() === $id) {
                return $coffee;
            }
        }
        return null;
    }
}
