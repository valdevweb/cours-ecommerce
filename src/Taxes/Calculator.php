<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator
{
    protected $logger;
    protected $tva;
    public function __construct(LoggerInterface $logger, $tva)
    {
        $this->logger = $logger;
        $this->tva = $tva;
    }
    public function calcul(float $prix): float
    {
        $this->logger->info('un calcul a lieu');
        return $prix * $this->tva / 100;
    }
}
