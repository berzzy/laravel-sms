<?php

namespace Berzel\Sms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Berzel\Sms\SmsService
 */
class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-sms';
    }
}
