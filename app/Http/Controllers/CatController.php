<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CatController extends Controller
{
    public function index()
    {
        // Using TheCatAPI to fetch random cat images
        $response = Http::get('https://api.thecatapi.com/v1/images/search?limit=9');
        $cats = $response->json();
        
        return view('cats', [
            'cats' => $cats
        ]);
    }
}
