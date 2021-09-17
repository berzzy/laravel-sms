<?php

namespace Berzel\Sms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Berzel\Sms\Sms
 */
class SmsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-sms';
    }
}
