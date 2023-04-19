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
        $timestamp = shell_exec('stat -c %Y /proc/1/cmdline');
        $remainder = time() - floatval($timestamp);

        $secs = $remainder % 60;
        $remainder = (int)($remainder / 60);
        $mins = $remainder % 60;
        $remainder = (int)($remainder / 60);
        $hours = $remainder % 24;
        $remainder = (int)($remainder / 24);
        $days = $remainder;

        return sprintf(
            '%dd, %dh, %dm, %ds',
            $days,
            $hours,
            $mins,
            $secs,
        );
    }
}
