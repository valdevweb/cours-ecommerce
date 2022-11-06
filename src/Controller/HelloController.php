<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;
    protected $logger;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{prenom?World}", name="hello")
     */
    public function hello($prenom, LoggerInterface $logger)
    {
        $slugify = new Slugify();
        dump($slugify->slugify("hello world"));
        $logger->info("mon message de log");
        $cacul = $this->calculator->calcul(50);
        dump($cacul);
        return new Response("Hello " . $prenom);
    }
}
