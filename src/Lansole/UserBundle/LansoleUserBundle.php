<?php

namespace Lansole\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LansoleUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}