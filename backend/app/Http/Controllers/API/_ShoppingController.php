<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\ShoppingResource;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     * CAMBIAR LAS COSAS DE LA API POR LA NUESTRA
     */
    public function index()
    {
        // Inicialmente, vamos a utilizar un autor constante
        $author = 'Pedro+Cano';
        // La key la cogeremos de las variables de entorno
        $key = env("API_KEY");
        $urlEuropeanaAPI = "https://api.europeana.eu/record/v2/search.json?";
        $queryString = "wskey=$key&query=who:\"$author\"";
        $urlConsulta = $urlEuropeanaAPI . $queryString;
        // Consultamos a la API
        $response = Http::get($urlConsulta);
        return ShoppingResource::collection($response->collect());
    }
}
