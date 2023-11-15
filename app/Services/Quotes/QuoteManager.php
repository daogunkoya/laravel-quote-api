<?php

namespace App\Services\Quotes;

use App\Interfaces\QuoteDriver;
use Illuminate\Support\Manager;

class QuoteManager extends Manager
{
    public function createKanyeQuoteDriver(): QuoteDriver
    {
        return new KanyeQuoteDriver();
    }

    public function getDefaultDriver(): string
    {
        return $this->config->get('quote.driver', 'kanye-quote');
    }

}
