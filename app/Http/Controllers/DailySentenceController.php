<?php

namespace App\Http\Controllers;

use App\Services\DailySentenceService;
use App\Services\MetaphorpsumService;
use Illuminate\Http\JsonResponse;

class DailySentenceController extends Controller
{
    private DailySentenceService $dailySentenceService;

    public function __construct(DailySentenceService $dailySentenceService)
    {
        $this->dailySentenceService = $dailySentenceService;
    }

    public function getSentence(): JsonResponse
    {
        $sentence = $this->dailySentenceService->getSentence();

        return response()->json($sentence);
    }
}
