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
            '<html><body>Hallo meneer.</body></html>'
        );
    }
}
