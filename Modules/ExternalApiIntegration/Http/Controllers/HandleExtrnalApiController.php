<?php

namespace Modules\ExternalApiIntegration\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class HandleExtrnalApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        // Access response data
        $data = $response->json();  // Convert JSON to Array
        return $data;
    }
}
