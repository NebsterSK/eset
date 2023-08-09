<?php

namespace NebsterSK\Eset\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NebsterSK\Eset\Eset
 */
class Eset extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NebsterSK\Eset\Eset::class;
    }
}
