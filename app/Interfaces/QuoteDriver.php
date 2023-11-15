<?php
namespace App\Interfaces;

use Carbon\CarbonInterface;

interface QuoteDriver
{
    public function fetchQuotes(): array;
    public function refreshQuotes():array;
    public function getRandomQuotes():array;
}
