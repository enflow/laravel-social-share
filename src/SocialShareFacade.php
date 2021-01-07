<?php

namespace Enflow\SocialShare;

use Illuminate\Support\Facades\Facade;

class SocialShareFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SocialShare::class;
    }
}
