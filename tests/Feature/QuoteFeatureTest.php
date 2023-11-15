<?php

namespace Tests\Feature;

use Tests\TestCase;

class QuoteFeatureTest extends TestCase
{

    /** @test */
    public function it_returns_unauthorized_without_api_token()
    {
        $response = $this->get('/api/quotes');

        $response->assertStatus(401)
            ->assertJson(['error' => 'Unauthorized']);
    }

    /** @test */
    public function it_returns_random_quotes_with_valid_api_token()
    {
        $apiToken = env('API_TOKEN');
        $response = $this->withHeaders(['Authorization' => "Bearer $apiToken"])
            ->get('/api/quotes');

        $response->assertStatus(200)
            ->assertJsonCount(5)
            ->assertJsonStructure([]);
    }

    /** @test */
    public function it_refreshes_quotes_with_valid_api_token()
    {
        $apiToken = env('API_TOKEN');

        $response = $this->withHeaders(['Authorization' => "Bearer $apiToken"])
            ->get('/api/quotes/refresh');

        $response->assertStatus(200)
            ->assertJsonCount(5)
            ->assertJsonStructure([]);
    }
}
