<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FoodController extends Controller
{
    public function getByEan(Request $request, $ean): \Illuminate\Http\JsonResponse
    {
        $response = Http::get('https://world.openfoodfacts.org/api/v0/product/' . $ean . '.json');

        return response()->json($response->json());
    }
}
