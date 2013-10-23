<?php

namespace Manja\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ManjaUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
