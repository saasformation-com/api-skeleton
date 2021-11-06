<?php

use App\Infrastructure\Framework\Kernel;
use SaaSFormation\Vendor\API\Server;

require_once __DIR__ . "/../vendor/autoload.php";

Server::create()->boot(
    Kernel::create()->boot(__DIR__ . '/../')
)->serve();
