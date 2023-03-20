<?php

namespace Sitesurfer\FarmSimManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sitesurfer\FarmSimManager\FarmSimManager
 */
class FarmSimManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sitesurfer\FarmSimManager\FarmSimManager::class;
    }
}
