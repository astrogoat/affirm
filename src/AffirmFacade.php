<?php

namespace Astrogoat\Affirm;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Affirm\Affirm
 */
class AffirmFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'affirm';
    }
}
