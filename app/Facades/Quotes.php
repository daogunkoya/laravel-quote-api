<?php

namespace App\Facades;

use App\Services\Quotes\QuoteManager;
use Illuminate\Support\Facades\Facade;

class Quotes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return QuoteManager::class;
    }
}
