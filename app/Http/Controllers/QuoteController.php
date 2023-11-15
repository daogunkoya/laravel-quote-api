<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Facades\Quotes;

class QuoteController extends Controller
{
    public function getRandomQuotes(): JsonResponse
    {
        // Check authentication logic here if needed
        $quotes = Quotes::getRandomQuotes();
        return response()->json($quotes);
    }

    public function refreshQuotes(): JsonResponse
    {
        // Check authentication logic here if needed
        $quotes = Quotes::refreshQuotes();
        return response()->json($quotes);
    }
}
