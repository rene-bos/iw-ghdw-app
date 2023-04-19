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
                '<html><body>Host: %s<br>Uptime: %s<br>Version: {{VERSION}}</body></html>',
                gethostname(),
                $this->getUptime(),
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

    private function getUptime(): string
    {
        $str = @file_get_contents('/proc/uptime');
        $num = floatval($str);
        $secs = $num % 60;
        $num = (int)($num / 60);
        $mins = $num % 60;
        $num = (int)($num / 60);
        $hours = $num % 24;
        $num = (int)($num / 24);
        $days = $num;

        return sprintf(
            '%dd, %dh, %dm, %ds',
            $days,
            $hours,
            $mins,
            $secs,
        );
    }
}
