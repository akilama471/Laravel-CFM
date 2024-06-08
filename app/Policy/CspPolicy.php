<?php

namespace App\Policy;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CspPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addDirective(Directive::IMG, 'self data:');
    }
}
