<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{

    public function Home()
    {
        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $generi = $response['data'];
        return view('anime', ['dati' => $generi]);
    }

    public function byGenere($genre)
    {
        $uri = 'https://api.jikan.moe/v4/anime?genres=' . $genre;
        $anime = Http::get($uri)->json()['data'];
        return view('genere', compact('anime'));
    }


    public function anime($id)
    {
        $uri = 'https://api.jikan.moe/v4/anime/' . $id;
        $anime = Http::get($uri)->json()['data'];
        return view('animeSingolo', compact('anime'));
    }

    public function testApi()
    {
        Http::get('/articoli')->json()['data'];
    }
}
