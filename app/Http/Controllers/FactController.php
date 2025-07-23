<?php

namespace App\Http\Controllers;

use App\Models\Fact;
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

            $factText = $response->json()['fact'] ?? 'Sin contenido';

            // Guardar el dato en la base de datos
            $fact = Fact::create(['content' => $factText]);

            return view('fact', ['fact' => $fact->content]);
        } catch (Exception $e) {
            Log::error('Error al obtener dato de gato: ' . $e->getMessage());

            return response()->view('fact-error', [
                'message' => 'Ups... parece que el gatito se ha escondido. Inténtalo de nuevo más tarde 🐾',
                'error' => $e->getMessage()
            ], 503);
        }
    }
}
