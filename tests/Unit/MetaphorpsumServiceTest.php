<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\MetaphorpsumService;
use Illuminate\Support\Facades\Http;

class MetaphorpsumServiceTest extends TestCase
{
    public function testGetSentence()
    {
        $mockResponse = "They were lost without the thready relish that composed their addition. This is not to discredit the idea that one cannot separate harmonicas from affined needles. In ancient times a sister is a backstairs thrill.";

        Http::fake([
            'http://metaphorpsum.com/*' => Http::response($mockResponse, 200),
        ]);

        $metaphorpsumService = new MetaphorpsumService();

        $sentence = $metaphorpsumService->getSentence();

        $this->assertEquals($mockResponse, $sentence);
    }
}
