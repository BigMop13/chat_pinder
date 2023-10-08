<?php
declare(strict_types=1);

namespace App\Controller;

class WebSocketTest
{
    public function index(): void
    {
        $server = new OpenSwoole\HTTP\Server("127.0.0.1", 9501);
    }
}