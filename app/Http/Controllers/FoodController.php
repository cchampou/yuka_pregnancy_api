<?php

namespace App\Http\Controllers;

use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class FoodController extends Controller
{
    public function getByEan(Request $request, $ean): \Illuminate\Http\JsonResponse
    {
        $response = Http::get('https://world.openfoodfacts.org/api/v0/product/' . $ean);
        $scan = new Scan();
        $scan->ean = $ean;
        $scan->save();
        Log::info('Saved scan entry');
        return response()->json($response->json());
    }
}
