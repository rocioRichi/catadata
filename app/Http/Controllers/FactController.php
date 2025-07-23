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

            // Verificar si ya existe
            $existing = Fact::where('content', $factText)->first();

            if (!$existing) {
                Fact::create(['content' => $factText]);
            }

            return view('fact', ['fact' => $factText]);
        } catch (Exception $e) {
            Log::error('Error al obtener dato de gato: ' . $e->getMessage());

            return response()->view('fact-error', [
                'message' => 'Ups... parece que el gatito se ha enredado en la red. Inténtalo más tarde 🐾',
                'error' => $e->getMessage()
            ], 503);
        }
    }
    public function index()
    {
        $facts = \App\Models\Fact::latest()->get(); // muestra los más recientes arriba
        return view('facts', ['facts' => $facts]);
    }
}
