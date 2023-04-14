<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class InfoController extends AbstractController
{
    #[Route('/info')]
    public function info(): Response
    {
        return new Response(
            sprintf(
                '<html><body>Running on host: %s</body></html>',
                gethostname(),
            )
        );
    }
}
