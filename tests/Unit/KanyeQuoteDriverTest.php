<?php

namespace Tests\Unit;

use App\Services\Quotes\KanyeQuoteDriver;
use Tests\TestCase;

class KanyeQuoteDriverTest extends TestCase
{
    /** @test */
    public function it_fetches_quotes_correctly()
    {
        $kanyeQuoteDriver = new KanyeQuoteDriver();
        // Call the fetchQuotes() method
        $quotes = $kanyeQuoteDriver->fetchQuotes();
        // Assertions
        $this->assertCount(5, $quotes);
        $this->assertNotEmpty($quotes);
//
    }
}
