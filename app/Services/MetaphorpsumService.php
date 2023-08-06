<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MetaphorpsumService implements DailySentenceService
{
    protected $apiUrl = "http://metaphorpsum.com/sentences/3";

    public function getSentence()
    {
        try {
            $response = Http::get($this->apiUrl);

            if ($response->successful()) {
                return $response->body();
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return null;
        }
    }
}
