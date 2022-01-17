<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HelloWorldController
{
    #[Route('/hello-world')]
    public function helloWorld(): Response
    {
        return new Response(
            '<html><body>Hello, World!</body></html>'
        );
    }

    #[Route('/hello/{name}')]
    public function helloName(string $name): Response {
        ereg_replace('(.*)', '$1', $name);

        return new Response(
            sprintf(
                '<html><body>Hello, %s</body></html>',
            )
        );
    }
}
