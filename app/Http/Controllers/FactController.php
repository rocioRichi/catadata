<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class FactController extends Controller
{
    public function show()
    {
        try {
            $response = Http::timeout(5)->get('https://catfact.ninja/fact');

            if (!$response->successful()) {
                throw new Exception('La API devolvió un error.');
            }

            $fact = $response->json()['fact'] ?? 'No se pudo leer el dato de la API.';
            return view('fact', ['fact' => $fact]);
        } catch (Exception $e) {
            Log::error('Error al obtener dato de gato: ' . $e->getMessage());

            return response()->view('fact-error', [
                'message' => 'Ups... parece que el gatito se está bañando. Inténtalo de nuevo más tarde 🛁🐱',
                'error' => $e->getMessage()
            ], 503);
        }
    }
}
