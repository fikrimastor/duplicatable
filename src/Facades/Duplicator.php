<?php

namespace FikriMastor\Duplicator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FikriMastor\Duplicator\Duplicator
 */
class Duplicator extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \FikriMastor\Duplicator\Duplicator::class;
    }
}
