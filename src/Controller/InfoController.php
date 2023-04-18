<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/info')]
final class InfoController extends AbstractController
{
    #[Route('')]
    public function info(): Response
    {
        return new Response(
            sprintf(
                '<html><body>Host: %s<br>Version: {{VERSION}}</body></html>',
                gethostname(),
            )
        );
    }

    #[Route('/version')]
    public function version(): Response
    {
        return new Response(
            sprintf(
                '<html><body>{{VERSION}}</body></html>',
            )
        );
    }
}
