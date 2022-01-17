<?php

declare(strict_types=1);

namespace Controller;

use App\Controller\HelloWorldController;
use PHPUnit\Framework\TestCase;

final class HelloWorldControllerTest extends TestCase
{
    public function testHelloWorld(): void
    {
        $controller = new HelloWorldController();

        $response = $controller->helloWorld();

        $this->assertEquals('<html><body>Hello, René!</body></html>', $response->getContent());
    }
}
