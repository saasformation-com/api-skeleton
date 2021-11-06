<?php

namespace App\Tests\Functional\Context;

use App\Infrastructure\Framework\Kernel;
use SaaSFormation\Vendor\FunctionalTests\MainContext as BaseMainContext;

class MainContext extends BaseMainContext
{
    protected function bootKernel(): \SaaSFormation\Vendor\API\Kernel
    {
        return Kernel::create()->boot(__DIR__ . '/../../../');
    }
}
