<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HelloWorldController extends AbstractController
{
    public function __construct(readonly string $helloSuffix)
    {
    }

    #[Route('/hello')]
    public function helloWorld(): Response
    {
        return new Response(
            sprintf(
                '<html><body>Hello, world%s</body></html>',
                $this->helloSuffix
            )
        );
    }

    #[Route('/hello/{name}')]
    public function helloName(string $name): Response
    {
        return new Response(
            sprintf(
                '<html><body>Hello, %s</body></html>',
                $name
            )
        );
    }
}
