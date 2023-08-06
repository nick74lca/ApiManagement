<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ItsthisforthatService implements DailySentenceService
{
    protected $apiUrl = "'https://itsthisforthat.com/api.php?text";

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
