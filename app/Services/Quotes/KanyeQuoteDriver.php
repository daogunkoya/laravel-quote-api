<?php

namespace App\Services\Quotes;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

use App\Interfaces\QuoteDriver;

class KanyeQuoteDriver implements  QuoteDriver
{
    public function getRandomQuotes():array
    {
        return Cache::remember('kanye_quotes', now()->addMinutes(30), function () {
            return $this->fetchQuotes();
        });
    }

    public function refreshQuotes():array
    {
        $quotes = $this->fetchQuotes();

        Cache::put('kanye_quotes', $quotes, now()->addMinutes(30));

        return $quotes;
    }

    public function fetchQuotes():array
    {
        $quotes = [];
        for ($i = 0; $i < 5; $i++) {
            $response = Http::get(Config::get('quote.kanye_api_url'));
            $quote = $response->json('quote');
            $quotes[] = $quote;
        }
        return $quotes;
    }
}
