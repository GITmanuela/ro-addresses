<?php

namespace LaravelEnso\RoAddresses;

use LaravelEnso\IO\EnumServiceProvider as ServiceProvider;
use LaravelEnso\RoAddresses\app\Enums\Sectors;

class EnumServiceProvider extends ServiceProvider
{
    protected $register = [
        'sectors' => Sectors::class,
    ];
}
