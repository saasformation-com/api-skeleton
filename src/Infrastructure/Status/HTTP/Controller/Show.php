<?php

namespace App\Infrastructure\Status\HTTP\Controller;

use SaaSFormation\Vendor\HTTP\Controller;
use SaaSFormation\Vendor\HTTP\Response;

class Show extends Controller
{
    public function execute(): Response
    {
        return $this->responder()->respondOk([
            "data" => [
                "status" => "ok"
            ]
        ]);
    }
}
